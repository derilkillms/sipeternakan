<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_sirkulasi_pakan-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");




	$daritanggal = $_POST ['daritanggal'];
	$sampaitanggal = $_POST ['sampaitanggal'];

?>
<h2>Laporan Sirkulasi Pakan Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y');
echo "<br/>Data Telur : $daritanggal s/d $sampaitanggal";
 ?>
<table border="1">

 		     <tr>
          
				<th>No</th>
                <th>Kode Pakan</th>
                <th>Nama Pakan</th>
                <th>Nama Karyawan</th>
                <th>Jumlah Pakan</th>
                <th>Tanggal</th>
                                            
         	</tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select ts_pakan.kode_pakan,ts_pakan.id_pakan, ts_pakan.id_karyawan, ts_pakan.jml_pakan, ts_pakan.tanggal, tb_pakan.id_pakan, tb_pakan.nama_pakan, tb_karyawan.id_karyawan, tb_karyawan.nama_karyawan from ts_pakan INNER JOIN tb_pakan ON ts_pakan.id_pakan=tb_pakan.id_pakan INNER JOIN tb_karyawan ON ts_pakan.id_karyawan=tb_karyawan.id_karyawan WHERE tanggal BETWEEN '$daritanggal' AND '$sampaitanggal'");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>




							<tr>
                                    <td><?php echo $no++; ?></td>
                                   <td><?php echo $data['kode_pakan']; ?></td>
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['nama_karyawan']; ?></td>
                                    <td><?php echo $data['jml_pakan']; ?> kg</td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                
                               
                            </tr>

                            <?php } ?>

<?php


$sql2 = $koneksi->query("select SUM(jml_pakan) AS totalpakan from ts_pakan WHERE tanggal BETWEEN '$daritanggal' AND '$sampaitanggal'");

$tampil = $sql2->fetch_assoc();



?>

                            

   <tr>
                              <td colspan="4">Total </td>
                              <td><?php echo $tampil['totalpakan']; ?> kg</td>
                             
                              <td></td>
                            </tr>
</table>