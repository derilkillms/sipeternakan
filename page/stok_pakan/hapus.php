<?php

$id = $_GET ['id'];
$id_kategori = $_GET['kategori'];

$koneksi->query("delete from stok_pakan where pakan_id ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=view_stok_pakan&aksi=stok_pakan&id=<?php echo $id_kategori ?>";
</script>