<?php
include 'server/koneksi.php';

if(!$_SESSION['login'] === true){
	header("location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Poppins:wght@800&family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="text-center position-absolute top-50 start-50 translate-middle" style="font-family: 'Roboto', sans-serif">
<div class="container">
    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            Masukan Data      
    </div>
<div class="card-body">
        <form method="POST" action="server/tambah.php">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi Nama anda" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Isi Alamat anda" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki">Laki-Laki
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">Perempuan
            </div>
            <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama" id="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    
                </select>
            </div>
			<div class="form-group">
                <label>Asal sekolah</label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Isi Asal sekolah anda" required>
            </div>
            
            <br>

            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            <!-- <button type="reset" class="btn btn-danger" name="breset">Hapus</button>                                                           -->
        </form>
        
    </div>
</div>
</body>
</html>