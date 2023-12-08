<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM calon_siswa WHERE id = $id";

mysqli_query($koneksi, $query);

header("location:../index.php");

?>