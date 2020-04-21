
<?php 

	$kode_obat = $_POST ['kode_obat'];
	$id_obat = $_POST ['id_obat'];
	$id_karyawan = $_POST ['id_karyawan'];
	$jml_obat = $_POST ['jml_obat'];
	$tanggal = $_POST ['tanggal'];
	$deskripsi = $_POST['deskripsi'];
	
	


		$sql = $koneksi->query("UPDATE `ts_obat` set  id_obat='$id_obat', id_karyawan='$id_karyawan', jml_obat='$jml_obat', tanggal='$tanggal', deskripsi='$deskripsi' where kode_obat='$kode_obat'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_sirkulasi_obat";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                   
  