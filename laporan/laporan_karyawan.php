<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$filename = "karyawan_excel-(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");




?>
<h2>Laporan Karyawan AsmahillFarm</h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<table border="1">

 		<tr>
              <th>No</th>
              <th>Id Karyawan</th>
              <th>Nama Karyawan</th>
              <th>Alamat Karyawan</th>
              <th>Telepon Karyawan</th>
              <th>Jabatan Karyawan</th>
            
                                            
         </tr>


          <?php error_reporting(E_ALL ^ E_NOTICE);
          	 	$no = 1;


   				$sql = $koneksi->query("select * from tb_karyawan");

            	while ($data= $sql->fetch_assoc()){
                                   
             $jabatan_karyawan =$data['jabatan_karyawan'];


             
       		?>



 <tr>
                                    <td><?php echo $no++; ?></td>
                                     <td><?php echo $data['id_karyawan']; ?></td>
                                    <td><?php echo $data['nama_karyawan']; ?></td>
                                    <td><?php echo $data['alamat_karyawan']; ?></td>
                                    <td><?php echo $data['telepon_karyawan']; ?></td>
                                    <td><?php If($jabatan_karyawan=="kr"){
                                                Echo "Karyawan";
                                            }Else if($jabatan_karyawan=="kpg"){
                                                Echo "Kepala Gudang";
                                          
                                            }?></td>
                                    
                                    





                                  
                            </tr>
                            <?php } ?>


</table>