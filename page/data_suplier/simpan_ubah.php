
<?php 

	$id_suplier = $_POST ['id_suplier'];
	$nama_suplier = $_POST ['nama_suplier'];
	$alamat_suplier = $_POST ['alamat_suplier'];
	$tlp_suplier = $_POST ['tlp_suplier'];
	
	


		$sql = $koneksi->query("UPDATE `tb_suplier` set  nama_suplier='$nama_suplier', alamat_suplier='$alamat_suplier', tlp_suplier='$tlp_suplier' where id_suplier='$id_suplier'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_suplier";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                         