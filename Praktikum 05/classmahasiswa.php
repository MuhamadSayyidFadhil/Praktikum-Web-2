<?php

class mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;
    public function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;

    }

    function setPredikatIpk($ipk)
    {
        if ($ipk > 3.5) {
            echo"CumLaude";
        } else {
        echo "You Did a great job!";
        }
    }
}

$mahasiswa = new mahasiswa("Muhammad Sayyid Fadhil", "0110223061", "Bogor", "Teknik Informatika", "3.95");
echo "Nama Lengkap: " . $mahasiswa->namaMahasiswa ;
echo "<br>";
echo "NIM: " . $mahasiswa->nim ;
echo "<br>";
echo "Domisili: " . $mahasiswa->domisili ;
echo "<br>";
echo "Prodi: " . $mahasiswa->prodi ;
echo "<br>";
echo "Predikat IPK: " . $mahasiswa->ipk ;
echo "<br>";
$mahasiswa->setPredikatIpk($mahasiswa->ipk);
