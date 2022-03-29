<?php
class mahasiswa
{
    var $Nim;
    var $Nama;
    var $Angkatan;
    var $Prodi;
    var $Ipk;

    function __construct($Nim, $Nama, $Ipk)
    {
        $this->Nim = $Nim;
        $this->Nama = $Nama;
        $this->Ipk = $Ipk;
    }

    function predikat_ipk()
    { {
            if ($this->Ipk < 2.0) {
                return "cukup";
            } elseif ($this->Ipk >= 2.0 && $this->Ipk < 3.0) {
                return "Baik";
            } elseif ($this->Ipk >= 3.0 && $this->Ipk < 3.75) {
                return "memuaskan";
            } elseif ($this->Ipk >= 3.75 && $this->Ipk <= 4) {
                return "Cum Laude";
            }
        }
    }
}

$mahasiswa = new mahasiswa(0, "name", 0);

$mahasiswa->Nim = "0110221103";
$mahasiswa->Nama = "Putri";
$mahasiswa->Angkatan = "2021";
$mahasiswa->Prodi = "TI";
$mahasiswa->Ipk = 3;

var_dump($mahasiswa);

echo ("Nim :" . $mahasiswa->Nim . "<br>");
echo ("Nama: " . $mahasiswa->Nama . "<br>");
echo ("Angkatan: " . $mahasiswa->Angkatan . "<br>");
echo ("Prodi: " . $mahasiswa->Prodi . "<br>");
echo ("IPK :" . $mahasiswa->Ipk . "<br>");
echo ("Predikat :" . $mahasiswa->predikat_ipk());
