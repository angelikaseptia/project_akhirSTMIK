<?php 
require 'functions.php';
$id = $_GET["id"];

$tb_pasien = query("SELECT * FROM tb_pasien WHERE id = $id")[0];

// cek apakah tombol submit sdh bisa di tekan
if( isset($_POST["submit"]) ) {
    if( ubah($_POST, $id) > 0 ) {
        echo "
           <script>
               alert('data berhasil diubah!');
               document.location.href = 'index.php';
           </script>
        ";
     } else {
        echo "
           <script>
               alert('data gagal diubah!');
               document.location.href = 'index.php';
           </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="my-4 text-center">Ubah Data Pasien</h1>

    <form action="" method="post" class="mx-auto w-50 border p-4">
        <div class="mb-2">
            <label for="no_identitas" class="form-label">No_identitas :</label>
            <input type="text" class="form-control" name="no_identitas" id="no_identitas" required
            value="<?= $tb_pasien["no_identitas"];?>">
        </div>
        <div class="mb-2">
            <label class="form-label" for="nama_pasien">Nama_pasien :</label>
            <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" required
            value="<?= $tb_pasien["nama_pasien"];?>">
        </div>
        <div class="mb-2">
            <label class="form-label" for="tmpt_tgl_lahir">Tmpt_tgl_lahir :</label>
            <input type="text" class="form-control" name="tmpt_tgl_lahir" id="tmpt_tgl_lahir" required
            value="<?= $tb_pasien["tmpt_tgl_lahir"];?>">
        </div>
        <div class="mb-2">
            <label class="form-label" for="jenis_kelamin">Jenis Kelamin :</label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" required
            value="<?= $tb_pasien["jenis_kelamin"];?>">
        </div>
        <div class="mb-2">
            <label class="form-label" for="alamat">alamat :</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required
            value="<?= $tb_pasien["alamat"];?>">
        </div>
        <div class="mb-2">
            <label class="form-label" for="no_telp">No_telp :</label>
            <input class="form-control" type="text" name="no_telp" id="no_telp" required
            value="<?= $tb_pasien["no_telp"];?>">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-success" name="submit">Ubah Data!</button>
        </div>

    </form>
</body>
</html>