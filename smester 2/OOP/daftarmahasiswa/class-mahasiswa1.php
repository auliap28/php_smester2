<?php
    class mahasiswa
    {
        var $Nim;
        var $Nama;
        var $Angkatan;
        var $Prodi;
        var $Ipk;//this

        function __construct($Nim, $Nama, $Ipk)
        {
            $this->Nim = $Nim;
            $this->Nama = $Nama;
            $this->Ipk = $Ipk;
        }

        function predikat_ipk()
        {{  
            if($this->Ipk, 2.0) {
                return "cukup";
            } elseif($this->Ipk >= 2.0 && $this->IPk < 3.0) {
                return "Baik";
            } elseif($this->Ipk >= 3.0 && $this->IPk < 3.75) {
                return "Memuaskan";
            } elseif($this->Ipk >= 3.75 && $this->IPk < 4) {
                return "cum laud";
            }
        }}
    }
?>