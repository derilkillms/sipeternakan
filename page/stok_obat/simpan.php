

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
	
	echo"$stok <br/>";
echo "$nama_obat<br/>";
echo "$stok <br/>";	
echo "$id_suplier <br/>";
echo "$tgl_masuk <br/>";
echo "$tgl_kadaluarsa <br/>";

		$sql = $koneksi->query("INSERT INTO `stok_obat` (`obat_id`, `nama_obat`, `stok`, `id_suplier`, `tgl_masuk`, `tgl_kadaluarsa`, id_kategori,deskripsi) VALUES (NULL, '$nama_obat1', '$stok', '$id_suplier', '$tgl_masuk', '$tgl_kadaluarsa','$id_kategori','$deskripsi');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=view_stok_obat";
     </script>';


		}else {
			echo "gagal simpan";
		}


?>                         
