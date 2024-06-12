<?php
include ("config.php");

if(!isset($_GET['id'])) {
    header('Location: list-karyawan.php');
}
    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_karyawan WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $karyawan = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1 ) {
        die ("Data tidak ditemukan...");
    }
?>

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
    <h3 class=" fw-bold">FORMULIR EDIT KARYAWAN</h3>
 </section>
    
  </center>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $karyawan['id']?>" /> 

            <p>
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $karyawan['nama'] ?>" />
            </p>
            <p>
                <label for="alamat" class="form-label">Alamat: </label>
                <textarea name="alamat" class="form-control"><?php echo $karyawan['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin" class="me-2">Jenis Kelamin:</label>
                <?php $jk = $karyawan['jenis_kelamin']; ?>
                <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="laki" <?php echo ($jk == 'laki') ? "checked": "" ?> /> Laki-laki</label>
                <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?> /> Perempuan</label>
            </p>
            <p>
                <label for="agama" class="form-label">Agama : </label>
                <?php $agama = $karyawan ['agama']; ?>
                <select name="agama" class="form-select">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?> value="Islam">Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?> value="Kristen">Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?> value="Hindu">Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?> value="Budha">Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected": "" ?> value="Atheis">Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
                <input type="text" class="form-control" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $karyawan ['sekolah_asal'] ?>" />
            </p>
        </fieldset>
        <p>
        <input type="submit" class="btn btn-dark" value="Simpan" name="simpan">
        </p>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>