<?php

$id = $_GET ['id'];

$koneksi->query("delete from jadwalku where jadwal_id ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_jadwal";
</script>