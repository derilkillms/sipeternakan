<?php

$id = $_GET ['id'];
$id_kategori = $_GET['kategori'];

$koneksi->query("delete from tb_pakan where id_pakan ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=view_pakan&aksi=data_pakan&id=<?php echo $id_kategori ?>";
</script>