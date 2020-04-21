
<?php 




	$obat_id = $_POST ['obat_id'];
	$nama_obat = $_POST ['nama_obat'];
	$stok = $_POST ['stok'];
	$id_suplier = $_POST ['id_suplier'];
	$tgl_masuk = $_POST ['tgl_masuk'];
	$tgl_kadaluarsa = $_POST ['tgl_kadaluarsa'];
	
	
$deskripsi =$_POST ['deskripsi'];

// zero limit
$obat = explode('.',$nama_obat);
$nama_obat1 = $obat[1];
$id_kategori = $obat[0];


		$sql = $koneksi->query("UPDATE `stok_obat` set obat_id='$obat_id', nama_obat='$nama_obat1', stok='$stok', id_suplier='$id_suplier', tgl_masuk='$tgl_masuk', tgl_kadaluarsa='$tgl_kadaluarsa', id_kategori = $id_kategori, deskripsi = '$deskripsi' where obat_id='$obat_id'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=view_stok_obat";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                         
