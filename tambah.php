<?php 
require 'functions.php';
// cek apakah tombol submit sdh bisa di tekan
if( isset($_POST["submit"]) ) {
    if( tambah($_POST) > 0 ) {
        echo "
           <script>
               alert('data berhasil ditambahkan!');
               document.location.href = 'index.php';
           </script>
        ";
     } else {
        echo "
           <script>
               alert('data gagal ditambahkan!');
               document.location.href = 'index.php';
           </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>  
    <h1 class="mb-4 text-center mt-4">Tambah Data Pasien</h1>

    <div class="header mx-auto w-50 border p-4">
        <form action="" method="post">
                <div class="mb-3">
                        <label for="no_identitas" class="form-label">no_identitas </label>
                        <input type="1"class="form-control" name="no_identitas" id="no_identitas" >
                </div>
                        
                <div class="mb-3">
                        <label for="nama_pasien" class="form-label">nama_pasien </label>
                        <input type="2" class="form-control" name="nama_pasien" id="nama_pasien" >
                </div>
                    
                <div class="mb-3">
                        <label for="tmpt_tgl_lahir" class="form-label">tmpt_tgl_lahir </label>
                        <input type="3" class="form-control" name="tmpt_tgl_lahir" id="tmpt_tgl_lahir" r>
                </div>
                    
                <div class="mb-3">
                        <label for="alamat" class="form-label">alamat </label>
                        <input type="2" class="form-control" name="alamat" id="alamat" >
                </div>
    
                <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">jenis kelamin </label>
                        <input type="2" class="form-control" name="jenis_kelamin" id="jenis_kelamin" >
                </div>
                    
                <div class="mb-3">
                        <label for="no_telp" class="form-label">no_telp </label>
                        <input type="2" class="form-control" name="no_telp" id="no_telp" >
                </div>
                    
                <div class="main">
                        <input type="submit" class="btn btn-success" name="submit" value="Tambah Data!">
                </div>

        </form>
    </div>
</div>
</body>
</html>

