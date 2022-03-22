<?php
    require_once('class-mahasiswa.php');
    $mahasiswa = new mahasiswa(12345, "rudi",3.0);
    echo $mahasiswa->predikat_ipk();
?>