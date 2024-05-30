<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_rexy = $_POST['nik_ktp_rexy'];
$nama_rexy = $_POST['nama_rexy'];
$no_hp_rexy = $_POST['no_hp_rexy'];
$alamat_rexy = $_POST['alamat_rexy'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_pelanggan_rexy
(nik_ktp_rexy,
nama_rexy,
no_hp_rexy,
alamat_rexy)
VALUES
('$_POST[nik_ktp_rexy]',
'$_POST[nama_rexy]',
'$_POST[no_hp_rexy]',
'$_POST[alamat_rexy]')
");
if ($insert) {
    //Jika proses delete berhasil
    header("location:tampil_pelanggan.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
}
