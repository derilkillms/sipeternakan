<html>
<head>
<title>Reset Data</title>

</head>
<body>
    <h2>Reset Data Peternakan</h2>
<?php
if (! empty($response)) {
    ?>
<div class="response <?php echo $response["type"]; ?>">
<?php echo nl2br($response["message"]); ?>
</div>
<?php
}
?>
    <form method="post" action="?page=resetdata&aksi=reset" enctype="multipart/form-data"
        id="frm-restore">
        <div class="form-group">
            <div class="form-group">Pilih Table</div>
 <div class="form-group">
                                           

<?php



$sql = $koneksi->query("select count(id_obat) AS jumlahsemua from tb_obat");
$tampil = $sql->fetch_assoc();

$sql1 = $koneksi->query("select count(jadwal_id) AS jumlahsemua from jadwalku");
$tampil1 = $sql1->fetch_assoc();

$sql2 = $koneksi->query("select count(id_karyawan) AS jumlahsemua from tb_karyawan");
$tampil2 = $sql2->fetch_assoc();

$sql3 = $koneksi->query("select count(id_pakan) AS jumlahsemua from tb_pakan");
$tampil3 = $sql3->fetch_assoc();

$sql4 = $koneksi->query("select count(id_suplier) AS jumlahsemua from tb_suplier");
$tampil4 = $sql4->fetch_assoc();

$sql5 = $koneksi->query("select count(id_telur) AS jumlahsemua from tb_telur");
$tampil5 = $sql5->fetch_assoc();

$sql6 = $koneksi->query("select count(id) AS jumlahsemua from tb_user");
$tampil6 = $sql6->fetch_assoc();

$sql7 = $koneksi->query("select count(kode_obat) AS jumlahsemua from ts_obat");
$tampil7 = $sql7->fetch_assoc();

$sql8 = $koneksi->query("select count(kode_pakan) AS jumlahsemua from ts_pakan");
$tampil8 = $sql8->fetch_assoc();

$sql9 = $koneksi->query("select count(pakan_id) AS jumlahsemua from stok_pakan");
$tampil9 = $sql9->fetch_assoc();

$sql10 = $koneksi->query("select count(obat_id) AS jumlahsemua from stok_obat");
$tampil10 = $sql10->fetch_assoc();



?>

<select name="resetdata" id="resetdata" class="form-control" required> <option value="">-- Pilih Tabel --</option> 

<option value="jadwalku">Data Jadwal <b>|</b> ( <?php echo $tampil1['jumlahsemua']; ?> data)</option>
<option value="tb_karyawan">Data Karyawan <b>|</b> ( <?php echo $tampil2['jumlahsemua']; ?> data)</option>
<option value="tb_obat">Data Obat <b>|</b> ( <?php echo $tampil['jumlahsemua']; ?> data)</option>
<option value="tb_pakan">Data Pakan <b>|</b> ( <?php echo $tampil3['jumlahsemua']; ?> data)</option>
<option value="tb_suplier">Data Suplier <b>|</b> ( <?php echo $tampil4['jumlahsemua']; ?> data)</option>
<option value="tb_telur">Data Telur <b>|</b> ( <?php echo $tampil5['jumlahsemua']; ?> data)</option>
<option value="tb_user">Data User <b>|</b> ( <?php echo $tampil6['jumlahsemua']; ?> data)</option>
<option value="ts_obat">Sirkulasi Obat <b>|</b> ( <?php echo $tampil7['jumlahsemua']; ?> data)</option>
<option value="ts_pakan">Sirkulasi Pakan <b>|</b> ( <?php echo $tampil8['jumlahsemua']; ?> data)</option>
<option value="stok_pakan">Stok Pakan <b>|</b> ( <?php echo $tampil9['jumlahsemua']; ?> data)</option>
<option value="stok_obat">Stok Pakan <b>|</b> ( <?php echo $tampil10['jumlahsemua']; ?> data)</option>


      </select>
    

                                        </div>

           
        </div>
        <div class="form-group">
            <input type="submit" name="restore" value="Reset"
                class="btn btn-primary" />
        </div>
    </form>
</body>
</html>