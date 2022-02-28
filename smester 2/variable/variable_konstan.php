<?php

//definisikan konstanta
define('PHI', 3.14);
define('DBNAME', 'db_mahasiswa');
define('DBSERVER', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'aulia');

//deklarasi variable
$jari = 14;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

//hasil
echo 'luas lingkaran : '.$luas. '<br>';
echo 'keliling lingkaran :'.$keliling;
echo '<hr>';

//menampilkan konstanta
echo 'nama database : '.DBNAME. '<br>';
echo 'server database : '.DBSERVER. '<br>';
echo 'nama user database : '.DBUSER. '<br>';
echo 'password database : '.DBNPASS. '<br>';
?>