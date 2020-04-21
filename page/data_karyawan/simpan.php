
<?php 

	
	$nama_karyawan = $_POST ['nama_karyawan'];
	$alamat_karyawan = $_POST ['alamat_karyawan'];
	$telepon_karyawan = $_POST ['telepon_karyawan'];
	$jabatan_karyawan = $_POST ['jabatan_karyawan'];
	
	
	echo"$stok";


		$sql = $koneksi->query("INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `alamat_karyawan`, `telepon_karyawan`,  
			`jabatan_karyawan`) VALUES (NULL, '$nama_karyawan', '$alamat_karyawan', '$telepon_karyawan', '$jabatan_karyawan');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_karyawan";
     </script>';


		}else {
			# code...
		}


?>                         
