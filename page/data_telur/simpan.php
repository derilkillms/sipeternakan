
<?php 

	
	$id_karyawan = $_POST ['id_karyawan'];
	$jml_telur = $_POST ['jml_telur'];
	$berat = $_POST ['berat'];
	$tanggal = $_POST ['tanggal'];
	
	
	echo"$stok";


		$sql = $koneksi->query("INSERT INTO `tb_telur` (`id_telur`, `id_karyawan`, `jml_telur`, `berat`,  
			`tanggal`) VALUES (NULL, '$id_karyawan', '$jml_telur', '$berat', '$tanggal');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_telur";
     </script>';


		}else {
			# code...
		}


?>                         
