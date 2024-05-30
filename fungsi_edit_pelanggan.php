<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_tmp_rexy = $_POST['nik_ktp_tmp_rexy'];
$nik_ktp_rexy = $_POST['nik_ktp_rexy'];
$nama_rexy = $_POST['nama_rexy'];
$no_hp_rexy = $_POST['no_hp_rexy'];
$alamat_rexy = $_POST['alamat_rexy'];
//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_pelanggan_rexy SET
nik_ktp_rexy='$nik_ktp_rexy',
nama_rexy='$nama_rexy',
no_hp_rexy='$no_hp_rexy',
alamat_rexy='$alamat_rexy'
WHERE nik_ktp_rexy='$nik_ktp_tmp_rexy'
");
if ($update) {
    //Jika proses delete berhasil
    header("location:tampil_pelanggan.php");
} else {
    //Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
}
