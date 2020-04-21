

<?php 



	$nama_pakan = $_POST ['nama_pakan'];
	$stok = $_POST ['stok'];
	$id_suplier = $_POST ['id_suplier'];
	$tgl_masuk = $_POST ['tgl_masuk'];
	$tgl_kadaluarsa = $_POST ['tgl_kadaluarsa'];



	// $str = $nama_pakan;

// zero limit
$pakan = explode('.',$nama_pakan);
$nama_pakan1 = $pakan[1];
$id_kategori = $pakan[0];
	
	echo"$stok <br/>";
echo "$nama_pakan<br/>";
echo "$stok <br/>";	
echo "$id_suplier <br/>";
echo "$tgl_masuk <br/>";
echo "$tgl_kadaluarsa <br/>";

		$sql = $koneksi->query("INSERT INTO `stok_pakan` (`pakan_id`, `nama_pakan`, `stok`, `id_suplier`, `tgl_masuk`, `tgl_kadaluarsa`, id_kategori) VALUES (NULL, '$nama_pakan1', '$stok', '$id_suplier', '$tgl_masuk', '$tgl_kadaluarsa','$id_kategori');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=view_stok_pakan";
     </script>';


		}else {
			echo "gagal simpan";
		}


?>                         
