<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_sirkulasi_obat-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");




	$daritanggal = $_POST ['daritanggal'];
	$sampaitanggal = $_POST ['sampaitanggal'];

?>
<h2>Laporan Sirkulasi Obat Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y');
echo "<br/>Data Telur : $daritanggal s/d $sampaitanggal";
 ?>
<table border="1">

 		     <tr>
          
				<th>No</th>
                <th>Kode obat</th>
                <th>Nama obat</th>
                <th>Nama Karyawan</th>
                <th>Jumlah obat</th>
                <th>Tanggal</th>
                                            
         	</tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select ts_obat.kode_obat,ts_obat.id_obat, ts_obat.id_karyawan, ts_obat.jml_obat, ts_obat.tanggal, tb_obat.id_obat, tb_obat.nama_obat, tb_karyawan.id_karyawan, tb_karyawan.nama_karyawan from ts_obat INNER JOIN tb_obat ON ts_obat.id_obat=tb_obat.id_obat INNER JOIN tb_karyawan ON ts_obat.id_karyawan=tb_karyawan.id_karyawan WHERE tanggal BETWEEN '$daritanggal' AND '$sampaitanggal'");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>




							<tr>
                                    <td><?php echo $no++; ?></td>
                                   <td><?php echo $data['kode_obat']; ?></td>
                                    <td><?php echo $data['nama_obat']; ?></td>
                                    <td><?php echo $data['nama_karyawan']; ?></td>
                                    <td><?php echo $data['jml_obat']; ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                
                               
                            </tr>

                            <?php } ?>
<?php


$sql2 = $koneksi->query("select SUM(jml_obat) AS totalobat from ts_obat WHERE tanggal BETWEEN '$daritanggal' AND '$sampaitanggal'");

$tampil = $sql2->fetch_assoc();



?>

                            

   <tr>
                              <td colspan="4">Total </td>
                              <td><?php echo $tampil['totalobat']; ?> </td>
                             
                              <td></td>
                            </tr>
</table>

</table>