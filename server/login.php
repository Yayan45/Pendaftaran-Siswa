<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

$user = mysqli_fetch_assoc($result);

$cekpassword = $user['password'] === $password;
if($cekpassword){
    header("location: ../index.php");
    
    $_SESSION['login'] = true;
}
else {
    header("location: ../login.php");
}

?>