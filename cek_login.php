<?php
session_start();
include "config/koneksi.php";
$username = $_POST['username_rexy'];
$password = md5($_POST['password_rexy']);
$cari = mysqli_query($koneksi, "SELECT * FROM tbl_user_rexy WHERE username_rexy='$username'
AND password_rexy='$password'");
$data = mysqli_fetch_array($cari);
if (!empty($data['username_rexy'])) {
    $_SESSION['username_rexy'] = $data['username_rexy'];
    $_SESSION['password_rexy'] = $data['password_rexy'];
    $_SESSION['nama_lengkap_rexy'] = $data['nama_lengkap_rexy'];
    $_SESSION['level_rexy'] = $data['level_rexy'];
    echo "<script>alert('Berhasil Login');
    window.location='tampil_mobil.php';</script>";
} else {
    echo "<script>alert('Coba Lagi!!'); window.location='login.php';</script>";
}
