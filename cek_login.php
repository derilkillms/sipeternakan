<?php
session_start();
$koneksi = new mysqli ("localhost","root","","db_peternakan");

$username=addslashes(trim($_POST['username']));
$password=md5($_POST['password']);

$sql = $koneksi->query("SELECT * from tb_user WHERE username='$username' AND password='$password'");
$data=mysqli_fetch_array($sql);
$jumlah=mysqli_num_rows($sql);
if($jumlah>0){
	$_SESSION['nama']=$data[nama];
    $_SESSION['username']=$data[username];
	$_SESSION['password']=$data[password];
	header("location: index.php");

}else{
	header("location: login.php");
}
?>