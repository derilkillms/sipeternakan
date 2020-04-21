<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_penyetokan_obat-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");



?>
<h2>Laporan Penyetokan Obat Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		     <tr>
              <th>No</th>
              <th>Obat Id</th>
              <th>Nama Obat</th>
              <th>Stok</th>
              <th>Nama Suplier</th>
              <th>Tgl Masuk</th>
              <th>Tgl Kadaluarsa</th>
              <th>Deskripsi</th>
                                            
         </tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select stok_obat.obat_id,stok_obat.nama_obat, stok_obat.stok, stok_obat.id_suplier, stok_obat.tgl_masuk, stok_obat.tgl_kadaluarsa, tb_suplier.nama_suplier, IF(DATEDIFF(NOW(),tgl_kadaluarsa)>0,'Kadaluarsa','Belum Kadaluarsa') AS kadaluarsa , stok_obat.deskripsi from stok_obat INNER JOIN tb_suplier ON stok_obat.id_suplier=tb_suplier.id_suplier");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>



							<tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['obat_id']; ?></td>
                                    <td><?php echo $data['nama_obat']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                     <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['tgl_masuk']; ?></td>
                                    <td><?php echo $data['tgl_kadaluarsa']; ?></td>
                                    <td><?php echo $data['deskripsi']; ?></td>
                                    





                                  
                            </tr>
                            <?php } ?>


</table>