<?php

$id = $_GET ['id'];

$koneksi->query("delete from ts_obat where kode_obat ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_sirkulasi_obat";
</script>