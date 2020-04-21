<?php

$id = $_GET ['id'];

$koneksi->query("delete from tb_karyawan where id_karyawan ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_karyawan";
</script>