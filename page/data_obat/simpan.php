

<?php 



	$nama_obat = $_POST ['nama_obat'];
	$stok = $_POST ['stok'];
	$id_suplier = $_POST ['id_suplier'];
	$tgl_masuk = $_POST ['tgl_masuk'];
	$tgl_kadaluarsa = $_POST ['tgl_kadaluarsa'];
	$deskripsi = $_POST['deskripsi'];



	// $str = $nama_obat;

// zero limit
$obat = explode('.',$nama_obat);
$nama_obat1 = $obat[1];
$id_kategori = $obat[0];
	
	echo"$stok";


		$sql = $koneksi->query("INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `stok`, `id_suplier`, `tgl_masuk`, `tgl_kadaluarsa`, id_kategori, deskripsi) VALUES (NULL, '$nama_obat1', '$stok', '$id_suplier', '$tgl_masuk', '$tgl_kadaluarsa','$id_kategori','$deskripsi');");
	
echo $nama_obat1;

		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=view_obat";
     </script>';


		}else {
			# code...
			echo "errorcoy";
		}


?>                         
