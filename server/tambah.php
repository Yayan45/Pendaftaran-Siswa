<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];

$query = "INSERT INTO calon_siswa (nama,alamat,jenis_kelamin,agama,asal_sekolah) VALUES('$nama','$alamat','$jenis_kelamin','$agama','$asal_sekolah')";

mysqli_query($koneksi, $query);

header('Location: ../index.php');

?>