<?php
include "koneksi.php";

$tampil=mysqli_query($koneksi,"select * from t_barang WHERE kode_barang='$_POST[kode_barang]' ");
$data=mysqli_fetch_array($tampil);
$barang['nama_barang']=$data['nama_barang'];
$barang['satuan']=$data['satuan'];
$barang['stok']=$data['stok'];
$barang['harga_jual']=$data['harga_jual'];
echo json_encode($barang);
?>