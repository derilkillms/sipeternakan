<?php

$id = $_GET ['id'];

$koneksi->query("delete from tb_suplier where id_suplier ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_suplier";
</script>