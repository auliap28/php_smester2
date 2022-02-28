<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //nilai array 
        $ns1 = ['id'=>1, 'nim'=>'01101', 'uts'=>85, 'uas'=>70, 'tugas'=>90];
        $ns2 = ['id'=>2, 'nim'=>'01201', 'uts'=>70, 'uas'=>80, 'tugas'=>85];
        $ns3 = ['id'=>3, 'nim'=>'01301', 'uts'=>80, 'uas'=>80, 'tugas'=>70];
        $ns4 = ['id'=>4, 'nim'=>'01401', 'uts'=>75, 'uas'=>70, 'tugas'=>85];

        $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
    ?>
    <h3>Dafter Nilai Siswa</h3>
    <table style="border: 2px;" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            //cara1
            $nomor = 1;
            foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <h3>Daftar Nilai Siswa</h3>
    <table style="border:1px;" width="100%">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </thead>
        <tbody>
            <?php
            //cara2
            foreach($ar_nilai as $key):?>
                <tr>
                <td><?= $key['id']?></td>
                    <td><?= $key['nim']?></td>
                    <td><?= $key['uts']?></td>
                    <td><?= $key['uas']?></td>
                    <td><?= $key['tugas']?></td>
                    <td><?= number_format(($key['uts'] + $key['uas'] + $key['tugas'])/3,2,',','.')?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>