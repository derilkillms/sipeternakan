<?php
$koneksi = new mysqli ("localhost","root","","db_peternakan");
$filename = "laporan_telur-(".date('d-m-Y').").xls";
header("content-disposition: attachment; filename=$filename");
header("content-type: aplication/vdn.ms-excel");
$daritanggal = $_POST ['daritanggal'];
$sampaitanggal = $_POST ['sampaitanggal'];
$id_karyawan = $_POST['id_karyawan'];
?>
<h2>Laporan Telur Asmahill Farm </h2>
<?php echo "dicetak pada :".date('d-m-Y'); ?>
<br/>
<?php
$kueri = $koneksi->query("select * from tb_karyawan where id_karyawan=$id_karyawan" );
$tampil=$kueri->fetch_assoc();
if($id_karyawan == "tb_karyawan.id_karyawan"){
  $olehkaryawan="Semua Karyawan";
}else{
  $olehkaryawan=$tampil['nama_karyawan'];
}
echo "Penghitungan Telur Oleh: ".$olehkaryawan; 
echo "<br/>Data Telur : $daritanggal s/d $sampaitanggal";
?>
<table border="1">
  <tr>
    <th>No</th>
    <th>Id telur</th>
    <th>Id Karyawan</th>
    <th>Jumlah Telur</th>
    <th>Berat</th>
    <th>Tanggal</
    </tr>
    <?php error_reporting(E_ALL ^ E_NOTICE);
    $no = 1;
    $sql = $koneksi->query("select tb_telur.*,tb_karyawan.* from tb_telur INNER JOIN tb_karyawan ON tb_telur.id_karyawan=tb_karyawan.id_karyawan WHERE tb_telur.id_karyawan = $id_karyawan AND tb_telur.tanggal BETWEEN '$daritanggal' AND '$sampaitanggal'" );
    while ($data= $sql->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['id_telur']; ?></td>
        <td><?php echo $data['nama_karyawan']; ?></td>
        <td><?php echo $data['jml_telur']; ?></td>
        <td><?php echo $data['berat']; ?> kg</td>
        <td><?php echo $data['tanggal']; ?></td>
      </tr>
      <?php } ?>
      <?php
      $sql2 = $koneksi->query("select SUM(jml_telur) AS totaltelur, ROUND(SUM(berat)) AS totalberat from tb_telur WHERE tanggal BETWEEN '$daritanggal' AND '$sampaitanggal'");
      $tampil = $sql2->fetch_assoc();
      ?>
      , 
      <tr>
        <td colspan="3">Total </td>
        <td><?php echo $tampil['totaltelur']; ?> </td>
        <td><?php echo $tampil['totalberat']; ?> kg</td>
        <td></td>
      </tr>
    </table>