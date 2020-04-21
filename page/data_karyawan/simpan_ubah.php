
<?php 

	$id_karyawan = $_POST ['id_karyawan'];
	$nama_karyawan = $_POST ['nama_karyawan'];
	$alamat_karyawan = $_POST ['alamat_karyawan'];
	$telepon_karyawan = $_POST ['telepon_karyawan'];
	$jabatan_karyawan = $_POST ['jabatan_karyawan'];
	
	


		$sql = $koneksi->query("UPDATE `tb_karyawan` set  nama_karyawan='$nama_karyawan', alamat_karyawan='$alamat_karyawan', telepon_karyawan='$telepon_karyawan', jabatan_karyawan='$jabatan_karyawan' where id_karyawan='$id_karyawan'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_karyawan";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                         