<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_obat-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");

$id_kategori = $_POST['id_kategori'];

$sql2 = $koneksi->query("select * from tb_obat where id_kategori = '$id_kategori'");

$tampils = $sql2->fetch_assoc();

?>
<h2>Laporan Obat <?php echo "$tampils[nama_obat]"; ?> Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		     <tr>
              <th>No</th>
              <th>Id Obat</th>
              <th>Nama Obat</th>
              <th>Stok</th>
              <th>Nama Suplier</th>
              <th>Tgl Masuk</th>
              <th>Tgl Kadaluarsa</th>
              
                                            
         </tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select tb_obat.id_obat,tb_obat.nama_obat, tb_obat.stok, tb_obat.id_suplier, tb_obat.tgl_masuk, tb_obat.tgl_kadaluarsa, tb_suplier.nama_suplier, IF(DATEDIFF(NOW(),tgl_kadaluarsa)>0,'Kadaluarsa','Belum Kadaluarsa') AS kadaluarsa from tb_obat INNER JOIN tb_suplier ON tb_obat.id_suplier=tb_suplier.id_suplier");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>



							<tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['id_obat']; ?></td>
                                    <td><?php echo $data['nama_obat']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                     <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['tgl_masuk']; ?></td>
                                    <td><?php echo $data['tgl_kadaluarsa']; ?></td></td>
                                    





                                  
                            </tr>
                            <?php } ?>


</table>