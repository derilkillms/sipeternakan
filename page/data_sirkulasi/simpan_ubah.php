
<?php 

	$kode_pakan = $_POST ['kode_pakan'];
	$id_pakan = $_POST ['id_pakan'];
	$id_karyawan = $_POST ['id_karyawan'];
	$jml_pakan = $_POST ['jml_pakan'];
	$tanggal = $_POST ['tanggal'];
	
	


		$sql = $koneksi->query("UPDATE `ts_pakan` set  id_pakan='$id_pakan', id_karyawan='$id_karyawan', jml_pakan='$jml_pakan', tanggal='$tanggal' where kode_pakan='$kode_pakan'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_sirkulasi";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                   
  