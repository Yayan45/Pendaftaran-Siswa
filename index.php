<?php 

include 'server/koneksi.php';
if(!$_SESSION['login']){
	header("location: login.php");
}

$query = "SELECT * FROM calon_siswa";

$result = mysqli_query($koneksi, $query);
$data = [];
while($row = mysqli_fetch_assoc($result)) {
	array_push($data, $row);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Poppins:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="text-center">
	<font size="+300" face="impact">PENDAFTARAN PESERTA DIDIK BARU</font><br>
	<a class="btn btn-success mb-4" href="input.php">[+] PENDAFTARAN</a>
	<a class="btn btn-danger mb-4" href="server/logout.php">[-] LOGOUT</a>
<div class="container">
	<div class="card mt-3">
		<div class="card-header bg-success text-white">
			Daftar Calon Siswa
		</div>

		<div class="card-body">
			<table class="table table-bordered table-striped">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Asal Sekolah</th>
			<th>Aksi</th>
		</tr>
		<?php $id = 1; ?> 
		<?php foreach($data as $calon_siswa) : ?>
		<tr>
			<td><?= $id++; ?></td>
            <td><?= $calon_siswa['nama']; ?></td>
            <td><?= $calon_siswa['alamat']; ?></td>
            <td><?= $calon_siswa['jenis_kelamin']; ?></td>
			<td><?= $calon_siswa['agama']; ?></td>
			<td><?= $calon_siswa['asal_sekolah']; ?></td>
			<td><a class="btn btn-warning mb-4" href="edit.php?id=<?= $calon_siswa['id'];?>">Edit</a>
				<a class="btn btn-danger mb-4" href="server/hapus.php?id=<?= $calon_siswa['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a></td>
		</tr>
		<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>