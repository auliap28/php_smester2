<?php
include_once('daftar_beratbadan.php');
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
    <div>
        <h2>Gambar Hasil BMI</h2>
        <img src="bmi_ideal.jpg" alt="">
    </div>
    <div class="col-md-6 mx-auto">
    <header><h2>Data BMI Pasien</h2></header><br>
    <table class="table table-strip">
    <tr>
                <th>No</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Berat (Kg)</th>
                <th>Tinggi (cm)</th>
                <th>BMI</th>
                <th>Hasil</th>
            </tr>
        <?php
            $index = 1; foreach ($_SESSION['result'] as $value) : 
        ?>
            <tr>
                <td><?= $index++ ?></td>
                <td><?= $value['jeniskelamin'] ?></td>
                <td><?= $value['umur'] ?></td>
                <td><?= $value['berat'] ?></td>
                <td><?= $value['tinggi'] ?></td>
                <td><?= $value['bmi'] ?></td>
                <td><?= $value['hasil'] ?></td>
            </tr>
        <?php
        endforeach 
        ?>
    </table>
</body>
</html>