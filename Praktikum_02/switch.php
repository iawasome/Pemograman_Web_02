<?php

$grade = "B";
$keterangan = "";

switch ($grade) {
    case "A":
        $keterangan = "Nilai Sempurna";
        break;
    case "B":
        $keterangan = "Nilai Baik";
        break;
    case "C":
        $keterangan = "Nilai Cukup";
        break;
    case "D":
        $keterangan = "Anda Gagal";
        break;
    default:
        $keterangan = "Nilai Eror";
        break;
}

echo "<h1> Hasil anda $keterangan</h1>";

?>
