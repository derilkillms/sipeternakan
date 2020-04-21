
<?php 

	
	$id_pakan = $_POST ['id_pakan'];
	$id_karyawan = $_POST ['id_karyawan'];
	$jml_pakan = $_POST ['jml_pakan'];
	$tanggal = $_POST ['tanggal'];
	
	

$data = $koneksi->query("select (stok-$jml_pakan) as sisapakan from tb_pakan where id_pakan=$id_pakan");

$tampil = $data->fetch_assoc();




	$kurangan =$koneksi->query("UPDATE `tb_pakan` SET `stok` = '$tampil[sisapakan]' WHERE `tb_pakan`.`id_pakan` = $id_pakan;");
	
		

		$sql = $koneksi->query("INSERT INTO `ts_pakan` (`kode_pakan`, `id_pakan`, `id_karyawan`, `jml_pakan`, `tanggal` ) VALUES (NULL, '$id_pakan', '$id_karyawan', '$jml_pakan', '$tanggal');");
	
		if($sql){

		
 echo'<script type="text/javascript">
  alert("Simpan Data Berhasil ");
 window.location.href="?page=data_sirkulasi";
 </script>';


		}else {
			# code...
		}


?>                         
