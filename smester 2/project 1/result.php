<?php

include_once('class_bb.php');
if(isset($_POST['send'])) {
    $bmi->umur = (int)$_POST['umur'] ?? null;
    $bmi->jeniskelamin = $_POST['gender'] ?? null;
    $bmi->berat = (float)$_POST['berat'] ?? null;
    $bmi->tinggi = (float)$_POST['tinggi'] ?? null;
    $bmi->hasilbmi();
    $_SESSION['result'][] = [
        'umur' => $bmi->umur,
        'jeniskelamin' =>$bmi->jeniskelamin,
        'berat' => $bmi->berat,
        'tinggi' => $bmi->tinggi,
        'bmi' => $bmi->hasilbmi()[0],
        'hasil' => $bmi->hasilbmi()[1],
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <form action="daftar_beratbadan.php" method="POST">
  <div class="mt-5 col-md-4 border p-3 mx-auto">
    <header class="text-center"><h2>Hasil BMI</h2></header>
    <table class="w-100">
        <tr>
            <td>Berat/Tinggi Badan</td>
            <td>:</td>
            <td><?= $bmi->berat.'kg' ?? '' ?>/<?= $bmi->tinggi.'cm' ?? '' ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?= $bmi->umur.' Tahun' ?? '' ?></td>
        </tr>
        <tr>
            <td>BMI</td>
            <td>:</td>
            <td><?= $bmi->hasilBMI()[0] ?? '' ?></td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td>:</td>
            <td><?= $bmi->hasilBMI()[1] ?? '' ?></td>
        </tr>
    </table>
  </div>
</form>
<img src="bmi_ideal.jpg" alt="">
</body>
</html>