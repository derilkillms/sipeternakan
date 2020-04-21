
<?php 




	$pakan_id = $_POST ['pakan_id'];
	$nama_pakan = $_POST ['nama_pakan'];
	$stok = $_POST ['stok'];
	$id_suplier = $_POST ['id_suplier'];
	$tgl_masuk = $_POST ['tgl_masuk'];
	$tgl_kadaluarsa = $_POST ['tgl_kadaluarsa'];
	
	


// zero limit
$pakan = explode('.',$nama_pakan);
$nama_pakan1 = $pakan[1];
$id_kategori = $pakan[0];


		$sql = $koneksi->query("UPDATE `stok_pakan` set pakan_id='$pakan_id', nama_pakan='$nama_pakan1', stok='$stok', id_suplier='$id_suplier', tgl_masuk='$tgl_masuk', tgl_kadaluarsa='$tgl_kadaluarsa', id_kategori = $id_kategori where pakan_id='$pakan_id'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=view_stok_pakan";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                         
