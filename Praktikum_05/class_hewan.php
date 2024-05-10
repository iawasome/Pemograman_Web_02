<?php

class HewanMamalia
{
    public $warna;
    public $namaHewan;
    public $habitat;

    function makan()
    {
        return "Mamalia makan";
    }

    function minum()
    {
        return "Mamalia minum";
    }

    function menyusui()
    {
        return "Mamalia menyusui";
    }
}

$mamalia = new HewanMamalia();
$mamalia->namaHewan = "Mamalia Harimau";
$mamalia->warna = "Warna Oranye";
$mamalia->habitat = "Tinggal Di Hutan";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";
echo $mamalia->namaHewan;
echo "<br>";
echo $mamalia->warna;
echo "<br>";
echo $mamalia->habitat;
echo "<br>";
