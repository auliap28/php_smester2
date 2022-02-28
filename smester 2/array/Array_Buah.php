<?php
    //deklarasi array
    $array_buah = ['manggis', 'kelapa', 'Rambutan', 'duku'];

    //menampilkan array
    echo 'jumlah data array 0 => '.$array_buah[0]. '<br>';

    //menampilkan jumlah array
    echo 'menampilkan semua jumlah data array => '.count($array_buah). '<br>';

    echo '<hr>';
    //menampilkan array pakai foreach
    foreach ($array_buah as $key => $value) {
        echo 'menambahkan data array ke-' .$key.' => ' .$value.'<br>';
    }
    echo '<hr>';

    //menampilkan array dengan list
    echo '<ol>';
    foreach ($array_buah as $value) {
        echo '<li>'.$value.'</li>';
    }
    echo '</ol>';
?>