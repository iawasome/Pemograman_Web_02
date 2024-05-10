<?php

class formnilai
{
    public $nim, $matakuliah, $nilai;

    function __construct($nim, $matakuliah, $nilai)
    {
        $this->nim = $nim;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }

    public function hasilujian()
    if ($nilai >= 80) {
        $hasil_ujian = "A";
    } elseif ($nilai >= 70) {
        $hasil_ujian = "B";
    } elseif ($nilai >= 60) {
        $hasil_ujian = "C";
    } elseif ($nilai >= 50) {
        $hasil_ujian = "D";
    } else {
        $hasil_ujian = "E";
    }

    public function grade()
    if ($hasil_ujian = "A"){
        $grade = "Lulus";
    } elseif ($hasil_ujian = "B"){
        $grade = "Lulus";
    } elseif ($hasil_ujian = "C"){
        $grade = "Lulus";
    } elseif ($hasil_ujian = "D"){
        $grade = "Tidak Lulus";
    } elseif ($hasil_ujian = "E"){
        $grade = "Tidak Lulus";
    } else {
        $grade = "Error";
    }
}