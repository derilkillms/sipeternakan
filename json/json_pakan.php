<?php
session_start();

include "function.php";

$koneksi = new mysqli ("localhost","root","","db_peternakan");



$tampil=$koneksi->query("select tb_pakan.id_pakan,tb_pakan.nama_pakan, tb_pakan.stok, tb_pakan.id_suplier, tb_pakan.tgl_masuk, tb_pakan.tgl_kadaluarsa, tb_suplier.nama_suplier from tb_pakan INNER JOIN tb_suplier ON tb_pakan.id_suplier=tb_suplier.id_suplier WHERE tb_suplier.id_suplier='$_POST[id_suplier]' ");
$data=mysqli_fetch_array($tampil);
$barang['nama_barang']=$data['nama_barang'];
$barang['satuan']=$data['satuan'];
$barang['stok']=$data['stok'];
$barang['harga_jual']=$data['harga_jual'];
echo json_encode($barang);
?>