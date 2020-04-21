
<?php 
$date1 = $_POST['tanggal'];
$date2 = $_POST['jam'];
	
	$date = $date1." ".$date2;
	$title = $_POST['title'];
	$description = $_POST['description'];
	
	


		$sql = $koneksi->query("INSERT INTO `jadwalku` (`jadwal_id`, `title`, `description`, `date`) VALUES (NULL, '$title', '$description', '$date');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_jadwal";
     </script>';


		}else {
			# code...
		}


?>                         
