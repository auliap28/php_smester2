<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB 2 </a>
            <button class="navbar-tooler" type="button" data-bs-toggle="collapse" data-bs-target="#nafbarNavdropdown" aria-controls="navbarNavdropdown" aria-expanded="false" aria-label="togglr navigation">
                <span class="navbar-togggler-icon"></span>
            </button>
            <div class="collapse navbar-coolapse" id="navbarNavdropdown">
                <ul class="navbar nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavdropdownlinkmenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Review PHP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarNavdropdownlinkmenu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another Action</a></li>
                            <li><a class="dropdown-item" href="#">Something Else Here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavdropdownlinkmenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PHP05 OOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarNavdropdownlinkmenu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another Action</a></li>
                            <li><a class="dropdown-item" href="#">Something Else Here</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <nav class="navbar navbar-dark bg-light">
                                <div class="container-fluid">
                                    <form class="d-flex">
                                        <input clas="form-control me-2" type="search" placeholder="search" aria-label="search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h2>Form Nilai Ujian</h2>
    <br>
    <form method="post" action="">
        <div class="container">
            <div class="container-fluid">
                <form>
                    <div class="form-group row">
                        <label for="nim" class="col-4 c0l-form-label">NIM</label>
                        <div class="c0l-8">
                        <div class="input-group">
                            <div classs="input-group-prepend">
                            <div classs="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                            </div>
                            <input id="nim" name="nim" type="number" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div classs="form-group row">
                        <label for="nim" class="col-4 c0l-form-label">Mata Kuliah</label>
                        <div class="c0l-8">
                            <select id="matakuliah" name="matakuliah" class="suctom-select"></select>
                            <option value="matematika">matematika</option>
                            <option value="bahasa1">bahasa inggris</option>
                            <option value="bahasa2">bahasa indonesia</option>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-4 c0l-form-label">Nilai</label>
                        <div class="c0l-8">
                        <input id="nilai" name="nilai" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-4 c0l-form-label">Nilai</label>
                        <div class="c0l-8">
                        <button name="submit" type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <div class="m-5 border border-primary p-4 rounded">
        <?php
            require_once 'class mahasiswa.php';

            $Mahasiswa = new nilai_mahasiswa ($_POST['Nim'], $_POST['Matakuliah'], $_POST['Nilai']);
            if(isset($_POST['submit']))
            {
                echo "<hr>";
                echo "nim : ".$Nim=$_POST['nim'];
                echo "<br>matakuliah : ".$Matakuliah=$_POST['matakuliah'];
                echo "<br>nilai : ".$Nilai=$_POST['nilai'];
                echo "<br>hasil ujian : ".$Mahasiswa->grade();
                echo "<br>grade : ".$Mahasiswa->hasil();
            }
        ?>
    </div>
    <footer class="bg-dark text-white fixed-bottom">
        <div class="text-center p-2" style="background-color: rgb(3, 0, 0);">
            <div>
                <p><b>pemograman web </b> | mahasiswa : putri aulia rahmani </p>
            </div>
        </div>
    </footer>
</html>