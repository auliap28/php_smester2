<?php 
    //array buah
    $array_buah = [
        'n' => 'nanas',
        'j' => 'jambu',
        'd' => 'duku',
        'r' => 'rambutan',
    ];

    //menampilkan array dengan foreach list 
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        eecho '<li>'.$key .'-'.$value.'<li>';
    }
    echo '</ol>';

    echo '<hr>';
    echo 'menampilkan dengan short array';
    short($array_buah);

    //menampilkan array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value){
        echo '<li>'.$key.'-'.$value.'</li>';
    }
    echo '</ol>';
?>
fungsi dari short array adalah untuk memudahkan atau menyederhakanan dengan mudah tanpa bertele tele seperti di perpendek