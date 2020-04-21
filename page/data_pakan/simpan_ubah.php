
<?php 




	$id_pakan = $_POST ['id_pakan'];
	$nama_pakan = $_POST ['nama_pakan'];
	$stok = $_POST ['stok'];
	$id_suplier = $_POST ['id_suplier'];
	$tgl_masuk = $_POST ['tgl_masuk'];
	$tgl_kadaluarsa = $_POST ['tgl_kadaluarsa'];
	
	


// zero limit
$pakan = explode('.',$nama_pakan);
$nama_pakan1 = $pakan[1];
$id_kategori = $pakan[0];


		$sql = $koneksi->query("UPDATE `tb_pakan` set id_pakan='$id_pakan', nama_pakan='$nama_pakan1', stok='$stok', id_suplier='$id_suplier', tgl_masuk='$tgl_masuk', tgl_kadaluarsa='$tgl_kadaluarsa', id_kategori = $id_kategori where id_pakan='$id_pakan'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=view_pakan";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                         
