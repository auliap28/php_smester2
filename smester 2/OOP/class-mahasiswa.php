<?php
    class mahasiswa{
        var $Nim;
        var $Nama;
        var $Angkatan;
        var $Prodi;
        var $Ipk;//this

        function__construct($Nim,$Nama,$Ipk){
            $this->Nim - $Nim;
            $this->Nama - $Nama;
            $this->Ipk - $Ipk;
        }

        function predikat_ipk(){
            if($this->Ipk , 2.0) retrun "nim : ".$this->nim."<br> Nama : ".$this->Nama."<br> predikat : cukup";
            elseif($this->Ipk >= 2.0 && $this->IPk < 3.0) return "Nim : ".$this->Nim."<br> Nama :."$this->Nama : "<br>predikat : Baik";
            elseif($this->Ipk >= 3.0 && $this->IPk < 3.75) return "Nim : ".$this->Nim."<br> Nama :."$this->Nama : "<br>predikat : Memuaskan";
            elseif($this->Ipk >= 3.75 && $this->IPk < 4) return "Nim : ".$this->Nim."<br> Nama :."$this->Nama : "<br>predikat : cum laud";
        }
    }
?>