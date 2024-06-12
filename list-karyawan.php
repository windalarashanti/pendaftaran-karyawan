<?php include ("config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Karyawan Baru </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
<body>
<div class="container">
<center>  

<header class="mt-4">
   <h3 class=" fw-bold">KARYAWAN YANG SUDAH MENDAFTAR</h3>
</header>

<nav>
   <a href="form-daftar.php">[+] Tambah Baru</a>
</nav>

<br>

<table border="1" class="table-dark table table-hover table-striped table-striped-columns table table-bordered border-dark">
   <thead>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Asal Sekolah</th>
    <th>Tindakan</th>
</tr>
</thead>
<tbody class="table-group-divider">

<?php
$sql = "SELECT * FROM calon_karyawan";
$query = mysqli_query($db, $sql);
$noData = 0;

while ($karyawan = mysqli_fetch_array($query)) {
  $noData++;
echo "<tr>";

echo "<td>".$noData."</td>";
echo "<td>".$karyawan ['nama']."</td>";
echo "<td>".$karyawan ['alamat']."</td>";
echo "<td>".$karyawan['jenis_kelamin']."</td>";
echo "<td>".$karyawan ['agama']."</td>";
echo "<td>".$karyawan ['sekolah_asal']."</td>";

echo "<td>";
echo "<a href='form-edit.php?id=".$karyawan ['id']."'>Edit</a> | ";
echo "<a href='hapus.php?id=".$karyawan ['id']."'>Hapus</a>";
echo "</td>";
echo "</tr>";
}
?>
</tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</center>

<a href="index.php" class="btn btn-dark"><i class="bi bi-arrow-left"></i> kembali</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>