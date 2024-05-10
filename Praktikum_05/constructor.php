<?php

class Kendaraan
{
    public $merk;
    public $warna;
    public $tempatOperasi;

    function __construct($merk, $warna, $tempatOperasi)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$kendaraan = new Kendaraan("Suzuki GSX 150R", "Biru Silver", "Darat");
echo $kendaraan->merk;
echo "<br>";
echo $kendaraan->warna;
echo "<br>";
echo $kendaraan->tempatOperasi;
echo "<br>";
?>
