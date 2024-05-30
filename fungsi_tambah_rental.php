<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_trx_rexy = $_POST['no_trx_rexy'];
$nik_ktp_rexy = $_POST['nik_ktp_rexy'];
$no_plat_rexy = $_POST['no_plat_rexy'];
$tgl_rental_rexy = $_POST['tgl_rental_rexy'];
$jam_rental_rexy = $_POST['jam_rental_rexy'];
$harga_rexy = $_POST['harga_rexy'];
$lama_rexy = $_POST['lama_rexy'];
$total_bayar_rexy = $_POST['total_bayar_rexy'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_rental_rexy
(no_trx_rexy,
nik_ktp_rexy,
no_plat_rexy,
tgl_rental_rexy,
jam_rental_rexy,
harga_rexy,
lama_rexy,
total_rexy)
VALUES
('$_POST[no_trx_rexy]',
'$_POST[nik_ktp_rexy]',
'$_POST[no_plat_rexy]',
'$_POST[tgl_rental_rexy]',
'$_POST[jam_rental_rexy]',
'$_POST[harga_rexy]',
'$_POST[lama_rexy]',
'$_POST[total_rexy]')
");
if ($insert) {
    //Jika proses delete berhasil
    header("location:tampil_rental.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
}
