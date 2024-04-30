<?php
require 'functions.php';
$tb_pasien = query("SELECT * FROM tb_pasien");

if(isset($_POST["cari"])) {
    $tb_pasien = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="menu">
    <h1>Daftar Pasien</h1>
  </div>
<a class="btn btn-primary btn-pink" href="tambah.php">TAMBAH DATA PASIEN RS.MARINA</a>
<br><br>
<div class="main">
<form action="" method="post">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Cari data pasien" name="keyword" aria-label="Cari data pasien" aria-describedby="button-addon2" autocomplite="off">
    <button class="btn btn-outline-secondary" type="submit" name="cari" id="button-addon2">Cari!</button>
    </div>
</form>

<br>
<table class="table" border="1" cellpadding="10" cellspacing="0">

    <tr class="table-dark">
        <th>No.</th>
        <th>Aksi</th>
        <th>No_identitas</th>
        <th>Nama_pasien</th>
        <th>Tmpt_tgl_lahir</th>
        <th>Jenis_kelamin</th>
        <th>Alamat</th>
        <th>No_telp</th>
    </tr>
</div>
    <?php $i = 1; ?>
    <?php foreach( $tb_pasien as $row ):?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
        </td>
        <td><?= $row["no_identitas"]; ?></td>
        <td><?= $row["nama_pasien"]; ?></td>
        <td><?= $row["tmpt_tgl_lahir"] ?></td>
        <td><?= $row["jenis_kelamin"] ?></td>
        <td><?= $row["alamat"] ?></td>
        <td><?= $row["no_telp"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>