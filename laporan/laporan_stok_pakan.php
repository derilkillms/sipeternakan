<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_penyetokan_pakan-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");



?>
<h2>Laporan Penyetokan Pakan Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		     <tr>
              <th>No</th>
              <th>Pakan Id</th>
              <th>Nama Pakan</th>
              <th>Stok</th>
              <th>Nama Suplier</th>
              <th>Tgl Masuk</th>
              <th>Tgl Kadaluarsa</th>
              
                                            
         </tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select stok_pakan.pakan_id,stok_pakan.nama_pakan, stok_pakan.stok, stok_pakan.id_suplier, stok_pakan.tgl_masuk, stok_pakan.tgl_kadaluarsa, tb_suplier.nama_suplier, IF(DATEDIFF(NOW(),tgl_kadaluarsa)>0,'Kadaluarsa','Belum Kadaluarsa') AS kadaluarsa from stok_pakan INNER JOIN tb_suplier ON stok_pakan.id_suplier=tb_suplier.id_suplier");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>



							<tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['pakan_id']; ?></td>
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['stok']; ?> kg</td>
                                     <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['tgl_masuk']; ?></td>
                                    <td><?php echo $data['tgl_kadaluarsa']; ?></td></td>
                                    





                                  
                            </tr>
                            <?php } ?>


</table>