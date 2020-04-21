<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_pakan-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");

$id_kategori = $_POST['id_kategori'];


$sql2 = $koneksi->query("select * from tb_pakan where id_kategori = '$id_kategori'");

$tampils = $sql2->fetch_assoc();



?>
<h2>Laporan Pakan <?php echo "$tampils[nama_pakan]"; ?> Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		     <tr>
          
            								<th>No</th>
                                            <th>Id Pakan</th>
                                            <th>Nama Pakan</th>
                                            <th>Stok</th>
                                            <th>Suplier</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Status</th>
                                            
         </tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select tb_pakan.id_pakan,tb_pakan.nama_pakan, tb_pakan.stok, tb_pakan.id_suplier, tb_pakan.tgl_masuk, tb_pakan.tgl_kadaluarsa, tb_suplier.nama_suplier,IF(DATEDIFF(NOW(),tgl_kadaluarsa)>0,'Kadaluarsa','Belum Kadaluarsa') AS kadaluarsa from tb_pakan INNER JOIN tb_suplier ON tb_pakan.id_suplier=tb_suplier.id_suplier WHERE id_kategori = $id_kategori");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>




							<tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['id_pakan']; ?></td>
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                    <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['tgl_masuk']; ?></td>
                                    <td><?php echo $data['tgl_kadaluarsa']; ?></td>
                                   
                                    <td><?php echo $data['kadaluarsa']; ?></td>    
                                




                                  
                            </tr>
                            <?php } ?>


</table>