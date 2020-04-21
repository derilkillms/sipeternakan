<?php


$koneksi = new mysqli ("localhost","root","","db_peternakan");

$query =  $koneksi->query("SELECT * FROM jadwalku");





$arr = array();
while ($row = mysqli_fetch_assoc($query)) {
    $temp = array(
        "date" => $row["date"],       
        "title" => $row["title"],
        "description" => $row["description"]);

    array_push($arr, $temp);}
$data = json_encode($arr);
echo $data;
?>