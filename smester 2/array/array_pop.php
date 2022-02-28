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
    $tims = ['edi', 'riko', 'ahmad'];
    array_pop($tims);
    foreach ($tims as $value) {
        echo $value.'<br>';
    }
    ?>
</body>
</html>
fungsi dari array pop yaitu untuk menghapus isi array paling akhir.