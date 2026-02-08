<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
    "SELECT * FROM peserta 
     WHERE username='$username' 
     AND password='$password'"
);

$data = mysqli_fetch_assoc($query);
$cek  = mysqli_num_rows($query);

if ($cek > 0) {

    $_SESSION['username'] = $data['username'];
    $_SESSION['role']     = $data['role'];

    // CEK ROLE
    if ($data['role'] == 'admin') {
        header("Location: ds_admin.php");
    } else {
        header("Location: dashboard.php");
    }

} else {
    header("Location: login.php?error=1");
}
?>
