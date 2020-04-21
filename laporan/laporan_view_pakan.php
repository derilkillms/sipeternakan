<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_view_pakan-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");




?>
<h2>Laporan Ketersediaan Pakan Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		  <tr>
                                            <th>No</th>
                                          
                                            <th>Nama Pakan</th>
                                            <th>Stok Kadaluarsa</th>
                                            <th>Stok Tersedia</th>
                                           
                                           
                                        </tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select * from view_pakan");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>




							<tr>
                                   <td><?php echo $no++; ?></td>
                                     
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['kadaluarsa']; ?> </td>
                                    <td><?php echo $data['tersedia']; ?></td>
                                   
                                     
                                 

                                  
                            </tr>
                            <?php } ?>


</table>