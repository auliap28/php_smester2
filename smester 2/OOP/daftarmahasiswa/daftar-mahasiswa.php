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
    <div classs="container">
        <div class="container-fluid">
            <div>
                <p>Show Entries</p>
                <input type="number">
                <form class="d-flex float-end">
                    <input clas="form-control me-2" type="search" placeholder="search" aria-label="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <?php
        require_once 'class-mahasiswa1.php';
            $mahasiswa1 = new mahasiswa ("02011", "faiz fikri");
            $mahasiswa1->prodi = "TI";
            $mahasiswa1->thn_angkatan=2012;
            $mahasiswa1->ipk=3.8;

            $mahasiswa2 = new mahasiswa ("02012", "allisa khairunisa");
            $mahasiswa2->prodi = "TI";
            $mahasiswa2->thn_angkatan=2012;
            $mahasiswa2->ipk=3.9;

            $mahasiswa3 = new mahasiswa ("02011", "rosalie naurah");
            $mahasiswa3->prodi = "SI";
            $mahasiswa3->thn_angkatan=2010;
            $mahasiswa3->ipk=3.46;

            $mahasiswa4 = new mahasiswa ("02011", "defgi muhammad");
            $mahasiswa4->prodi = "SI";
            $mahasiswa4->thn_angkatan=2010;
            $mahasiswa4->ipk=3.2;

            @array_mhs = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];
    ?>

    <div class="container">
        <div class="align-items-center" style="padding: 70px;">
            <table id="example" class="display" style="border: 2px solid black;">
                <thead>
                    <tr class="bg-primarry">
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>PRODI</th>
                        <th>ANGKATAN</th>
                        <th>IPK</th>
                        <th>PREDIKAT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $counter = 1;
                        foreach ($array_mhs as $mahasiswa){
                            echo '<tr><td>'.$counter.'</td>'.
                                '<td>'.$mahasiswa->nim.'</td>'.
                                '<td>'.$mahasiswa->nama.'</td>'.
                                '<td>'.$mahasiswa->prodi.'</td>'.
                                '<td>'.$mahasiswa->thn_angkatan.'</td>'.
                                '<td>'.$mahasiswa->ipk.'</td>'.
                                '<td>'.$mahasiswa->predikat_ipk().'</td>'.
                                '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:#158CBA;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#158CBA;"></span></td>';
                                $counter++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="bg-dark text-white fixed-bottom">
        <div class="text-center p-2" style="background-color: rgb(3, 0, 0);">
            <div>
                <p><b>pemograman web </b> | mahasiswa : putri aulia rahmani </p>
            </div>
        </div>
    </footer>
</body>
</html>