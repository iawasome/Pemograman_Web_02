<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            return "Cumlaude";
        } else {
            return "Tidak Cumlaude";
        }
    }
}

$mahasiswa = new Mahasiswa("Fajar Muhamad", "0110223078", "Bogor", "Teknik Informatika", 4.0);

echo "Nama: " . $mahasiswa->namaMahasiswa . "<br>";
echo "NIM: " . $mahasiswa->nim . "<br>";
echo "Domisili: " . $mahasiswa->domisili . "<br>";
echo "Prodi: " . $mahasiswa->prodi . "<br>";
echo "IPK: " . $mahasiswa->ipk . "<br>";

echo "Predikat IPK: " . $mahasiswa->setPredikatIPK($mahasiswa->ipk);
?>
