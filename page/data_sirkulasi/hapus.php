<?php

$id = $_GET ['id'];

$koneksi->query("delete from ts_pakan where kode_pakan ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_sirkulasi";
</script>