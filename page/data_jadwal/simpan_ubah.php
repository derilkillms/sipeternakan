
<?php 

$date1 = $_POST['tanggal'];
$date2 = $_POST['jam'];
$jadwal_id = $_POST['jadwal_id'];
	
	$date = $date1." ".$date2;
	$title = $_POST['title'];
	$description = $_POST['description'];
	
	
		


		$sql = $koneksi->query("UPDATE `jadwalku` set jadwal_id='$jadwal_id', title='$title',
		 `date`='$date', description='$description'
		  where jadwal_id='$jadwal_id'");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_jadwal";
     </script>';


		}else {
			echo"gagal simpan cok";
		}


?>                         
