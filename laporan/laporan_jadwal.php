<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_jadwal-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");




?>
<h2>Laporan Jadwal Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		    <tr>
                                            <th>No</th>
                                            <th>Id Jadwal</th>
                                            <th>Judul</th>
                                           <th>Deskripsi</th>
                                           <th>Tanggal</th>
                                      
                                        </tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select * from jadwalku");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>




							<tr>
                                    <td><?php echo $no++; ?></td>
                                     <td><?php echo $data['jadwal_id']; ?></td>
                                    <td><?php echo $data['title']; ?></td>
                                    <td><?php echo $data['description']; ?></td>
                                    
                                    <td><?php echo $data['date']; ?></td>
                                
                                 

                                  
                            </tr>
                            <?php } ?>


</table>