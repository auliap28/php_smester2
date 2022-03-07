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
    <h3>belanja online</h3>

    <!-- daftar harga -->
    <div class="m-5 border border-primary p-4 box">
        <h6 style="text-align: center">Daftar Harga</h6>
            1. tv : Rp. 2.850.000 <br>
            2. mesin cuci : Rp. 3.350.000 <br>
            3. AC : Rp. 2.000.000 <br>
            <br>
            <br>
            *harga dapat berubah
    </div>

    <!-- form -->
    <div class="m-5 border border-primary p-4 rounded">
        <form method="POST" autocomplete="off" action="form_belanja.php">
        <div class="mb-3">
            <label for="formInput" class="form-label">custumer</label>
            <input type="text" class="form-control" id="text" nama="nama" placeholder="nama lengkap">
            <label for="InputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="text" email="email" aria-describedby="email">
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
            <label for="radio_0" class="custom-control-label">tv</label>
        </div>
            <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="mesin cuci"> 
            <label for="radio_1" class="custom-control-label">mesin cuci</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="AC"> 
            <label for="radio_2" class="custom-control-label">AC</label>
        </div>
        </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Jumlah Beli</label> 
            <div class="col-8">
            <input id="text1" name="jumlah" placeholder="Masukan Jumlah Pembelian" type="text" class="form-control" required="required">
        </div>
        </div> 
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Cetak Variabel -->
    <div class="m-5 border border-primary p-4 box">
    <h6 style="text-align: center"> Rincian Pembelanjaan </h6>
        <?php
        
         $nama_lengkap = $_POST['nama'];
         $email_lengkap = $_POST['email'];
         $produk = $_POST['produk'];
         $jumlah = $_POST['jumlah'];

         if($produk == "tv") {
           $total = $jumlah * 2850000;
         }
         elseif($produk == "mesin cuci") {
           $total = $jumlah * 3350000;
         }
         elseif($produk == "AC") {
           $total = $jumlah * 2000000;
         }
            
          // Cetak Pesanan
          echo '<br>Nama Customer = '.$nama_lengkap;
          echo '<br>Email Customer = '.$email_lengkap;
          echo '<br>Produk = '.$produk;
          echo '<br>Jumlah Beli = '.$jumlah;
          echo '<br>Total Belanja = '.$total;
        ?>
    </div>
</body>
</html>