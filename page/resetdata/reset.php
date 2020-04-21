<?php

$resetdata = $_POST ['resetdata'];

$koneksi->query("delete from $resetdata");

?>


<script type="text/javascript">
	window.location.href="?page=resetdata";
</script>