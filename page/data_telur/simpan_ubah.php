
<?php 

	$id_telur = $_POST ['id_telur'];
	$id_karyawan = $_POST ['id_karyawan'];
	$jml_telur = $_POST ['jml_telur'];
	$berat = $_POST ['berat'];
	$tanggal = $_POST ['tanggal'];
	
	


		$sql = $koneksi->query("UPDATE `tb_telur` set  id_karyawan='$id_karyawan', jml_telur='$jml_telur', berat='$berat', tanggal='$tanggal' where id_telur='$id_telur'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_telur";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                         
