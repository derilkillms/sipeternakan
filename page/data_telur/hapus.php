<?php

$id = $_GET ['id'];

$koneksi->query("delete from tb_telur where id_telur ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_telur";
</script>