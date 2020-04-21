<?php

$id = $_GET ['id'];
$id_kategori = $_GET['kategori'];

$koneksi->query("delete from tb_obat where id_obat ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=view_obat&aksi=data_obat&id=<?php echo $id_kategori ?>";
</script>