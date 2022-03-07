<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>
    <div class="m-6 border border-success p-4 rounded">
        <form method="GET" Autocomplete="off" action="form nilai.php">
            <div class="form-group row">
            <label for="text" class="col-4 col-form-label" >Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div>
                            <input id="text" nama="nama" placeholder="masukan nama lengkap" type="text" class="form-control" required="required">
                        </div>
                        </div>
        </form>
    </div>
    <select class="form-select" aria-label="Default select">
        <option selected>mata kuliah</option>
        <option value="bahasa_inggris">bahasa inggris</option>
        <option value="jaringan_komputer">jaringan komputer</option>
        <option value="ppkn">ppkn</option>
    </select>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-adjust"></i>
                </div>
                </div> 
                    <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS" type="number" class="form-control" required="required">
            </div>
            </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-adjust"></i>
                </div>
                </div> 
                    <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
            </div>
            </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Nilai Tugas</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-adjust"></i>
                </div>
                </div> 
                    <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="number" class="form-control" required="required">
            </div>
            </div>
    </div>
    
            <!-- Cetak php -->
                <?php
                    if(isset($_GET['submit'])){
                        $nama = $_GET['nama'];
                        $matkul = $_GET['matkul'];
                        $nilai_uts = $_GET['nilai_uts'];
                        $nilai_uas = $_GET['nilai_uas'];
                        $nilai_tugas = $_GET['nilai_tugas'];
                        $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                          
                        switch($matkul){
                            case "bahasa_inggris": $nama_matkul = "Bahasa Inggris"; break;
                            case "jaringan_komputer": $nama_matkul = "Jaringan Komputer"; break;
                            case "ppkn": $nama_matkul = "PPKn"; break;
                            default: "";
                        }

                    }?>
                
                <?php if(isset($_GET['submit'])){?>
                    <p>Nama Lengkap : <?= $nama?> </p>
                    <p>Mata Kuliah : <?= $nama_matkul?></p> 
                    <p>Nilai UTS : <?= $nilai_uts?></p> 
                    <p>Nilai UAS : <?= $nilai_uas?></p>
                    <p>Nilai Tugas/Praktikum : <?= $nilai_tugas?></p> 
                    <p>Nilai Akhir : <?= $nilai_akhir?></p> 
                <?php }else{
                    echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai , Grade dan Predikat </div>';
                } ?>
</body>
</html>