<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Karyawan Baru </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <center>
        <section class="header mt-4 mb-5">
            <h3 class=" fw-bold">PENDAFTARAN KARYAWAN BARU </h3>
            <h4 class="fw-bold">SMK Negeri 2 Pekalongan </h4>

            <h3 class="fw-bold">Selamat Datang </h3>
            
            <img src= "logosmk.png">
        </section>

        <section class="menu">
            <h5 class="mb-4">Silahkan Pilih Menu :</h5>
            <a href="form-daftar.php"><button type="button" class="btn btn-dark">Daftar Baru</button></a>
            <a href="list-karyawan.php"><button type="button" class="btn btn-dark">Pendaftar</button></a>
        </section>

  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
    if($_GET['status'] == 'sukses' ) {
      echo "Pendaftaran Karyawan Baru Berhasil";
    } else {
      echo "Pendaftaran Gagal";
    }
    ?>
  </p>
<?php endif; ?>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>