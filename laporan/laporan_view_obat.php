<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_view_obat-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");




?>
<h2>Laporan Ketersediaan Obat Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		  <tr>
                                            <th>No</th>
                                        
                                            <th>Nama obat</th>
                                            <th>Stok Kadaluarsa</th>
                                            <th>Stok Tersedia</th>
                                            <th>Deskirpsi</th>
                                           
                                        </tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select * from view_obat");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>




							<tr>
                                   <td><?php echo $no++; ?></td>
                                     
                                    <td><?php echo $data['nama_obat']; ?></td>
                                    <td><?php echo $data['kadaluarsa']; ?> </td>
                                     <td><?php echo $data['tersedia']; ?></td>
                                    <td><?php echo $data['deskripsi']; ?></td>
                                     
                                 

                                  
                            </tr>
                            <?php } ?>


</table>