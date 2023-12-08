<?php
include 'server/koneksi.php';

if(!$_SESSION['login']){
	header("location: login.php");
}

$id = $_GET['id'];

$query = "SELECT * FROM calon_siswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);

$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Ganti</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Poppins:wght@800&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body class="text-center position-absolute top-50 start-50 translate-middle" style="font-family: 'Roboto', sans-serif">
<div class="container">
    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            Edit Data      
    </div>
<div class="card-body">
        <form method="POST" action="server/update.php">
            <input type="hidden" name="id" value="<?=$data['id'];?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi Nama anda"  value="<?= $data['nama'];?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Isi Alamat anda"  value="<?= $data['alamat'];?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="<?= $data['jenis_kelamin'];?>">Laki-Laki
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="<?= $data['jenis_kelamin'];?>">Perempuan
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" name="agama" id="agama" value="<?= $data['agama'];?>">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    
                </select>
            </div>
			<div class="form-group">
                <label for="asal_sekolah">Asal sekolah</label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Isi Asal sekolah anda"  value="<?= $data['asal_sekolah'];?>">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan Data</button>
            </form>
        
    </div>
</div>
</body>
</html>