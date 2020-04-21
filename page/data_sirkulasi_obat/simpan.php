
<?php 

	
	$id_obat = $_POST ['id_obat'];
	$id_karyawan = $_POST ['id_karyawan'];
	$jml_obat = $_POST ['jml_obat'];
	$tanggal = $_POST ['tanggal'];
	$deskripsi = $_POST['deskripsi'];

	
$data = $koneksi->query("select (stok-$jml_obat) as sisaobat from tb_obat where id_obat=$id_obat");

$tampil = $data->fetch_assoc();




	$kurangan =$koneksi->query("UPDATE `tb_obat` SET `stok` = '$tampil[sisaobat]' WHERE `tb_obat`.`id_obat` = $id_obat;");
	


		$sql = $koneksi->query("INSERT INTO `ts_obat` (`kode_obat`, `id_obat`, `id_karyawan`, `jml_obat`, `tanggal` ,deskripsi) VALUES (NULL, '$id_obat', '$id_karyawan', '$jml_obat', '$tanggal', '$deskripsi');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_sirkulasi_obat";
     </script>';


		}else {
			# code...
		}


?>                         
