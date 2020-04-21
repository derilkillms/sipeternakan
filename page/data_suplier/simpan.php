
<?php 

	
	$nama_suplier = $_POST ['nama_suplier'];
	$alamat_suplier = $_POST ['alamat_suplier'];
	$tlp_suplier = $_POST ['tlp_suplier'];
	
	
	echo"$stok";


		$sql = $koneksi->query("INSERT INTO `tb_suplier` (`id_suplier`, `nama_suplier`, `alamat_suplier`, `tlp_suplier`) VALUES (NULL, '$nama_suplier', '$alamat_suplier', '$tlp_suplier');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_suplier";
     </script>';


		}else {
			# code...
		}


?>                         
