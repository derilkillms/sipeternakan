<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "laporan_suplier-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");




?>
<h2>Laporan Suplier Asmahill Farm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		     <tr>
          
				<th>No</th>
                <th>Id Suplier</th>
                <th>Nama Suplier</th>
                <th>Alamat Suplier</th>
                <th>Telpon Suplier</th>
                
         	</tr>

          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select * from tb_suplier");

            	while ($data= $sql->fetch_assoc()){
                                   
                
       		?>




							<tr>
                                    <td><?php echo $no++; ?></td>
                                   <td><?php echo $data['id_suplier']; ?></td>
                                    <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['alamat_suplier']; ?></td>
                                    <td><?php echo $data['tlp_suplier']; ?></td>
                                
                               
                            </tr>

                            <?php } ?>


</table>