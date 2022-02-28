<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tims  = ['nanang', 'taki', 'rizal', 'putri'];
    array_push($tims);
    foreach ($tims as $value); {
        echo $value.'<br>';
    }
    ?>
</body>
</html>
fungsi array push adalah yang digunakan untuk memasukan value ke sebuah array dan disimpan paling akhir / paling kanan