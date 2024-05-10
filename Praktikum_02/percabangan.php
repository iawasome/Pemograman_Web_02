<?php
$nilai = 90;

$keterangan = "";

if($nilai > 90){
    $keterangan = "Sangat Baik";
} elseif ($nilai > 70 || $nilai <= 90){
    $keterangan = "Baik";
} else {
    $keterangan = "Anda Tidak Lulus";
}

echo "<h1>nilai anda $keterangan </h1>";
?>