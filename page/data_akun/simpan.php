
<?php 

	
	$id = $_POST ['id'];
	$username = $_POST ['username'];
	$password = md5($_POST ['password']);
	$nama = $_POST ['nama'];
	

	


		$sql = $koneksi->query("INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES (NULL, '$username', '$password', '$nama');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_akun";
     </script>';


		}else {
			# code...
		}


?>                         
