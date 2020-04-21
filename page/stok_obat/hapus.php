<?php

$id = $_GET ['id'];
$id_kategori = $_GET['kategori'];

$koneksi->query("delete from stok_obat where obat_id ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=view_stok_obat&aksi=stok_obat&id=<?php echo $id_kategori ?>";
</script>