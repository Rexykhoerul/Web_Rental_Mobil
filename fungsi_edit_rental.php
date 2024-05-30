<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_trx_tmp_rexy = $_POST['no_tmp_trx_rexy'];
$no_trx_rexy = $_POST['no_trx_rexy'];
$nik_ktp_rexy = $_POST['nik_ktp_rexy'];
$no_plat_rexy = $_POST['no_plat_rexy'];
$tgl_rental_rexy = $_POST['tgl_rental_rexy'];
$jam_rental_rexy = $_POST['jam_rental_rexy'];
$harga_rexy = $_POST['harga_rexy'];
$lama_rexy = $_POST['lama_rexy'];
$total_rexy = $_POST['total_rexy'];
//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_rental_rexy SET
no_trx_rexy='$no_trx_rexy',
nik_ktp_rexy='$nik_ktp_rexy',
no_plat_rexy='$no_plat_rexy',
tgl_rental_rexy='$tgl_rental_rexy',
jam_rental_rexy='$jam_rental_rexy',
harga_rexy='$harga_rexy',
lama_rexy='$lama_rexy',
total_rexy='$total_rexy'
WHERE no_trx_rexy='$no_trx_tmp_rexy'
");
if ($update) {
    //Jika proses delete berhasil
    header("location:tampil_rental.php");
} else {
    //Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
}
