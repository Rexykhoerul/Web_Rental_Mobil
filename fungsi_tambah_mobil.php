<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_rexy = $_POST['no_plat_rexy'];
$nama_mobil_rexy = $_POST['nama_mobil_rexy'];
$brand_mobil_rexy = $_POST['brand_mobil_rexy'];
$tipe_transmisi_rexy = $_POST['tipe_transmisi_rexy'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_mobil_rexy
(no_plat_rexy,
nama_mobil_rexy,
brand_mobil_rexy,
tipe_transmisi_rexy)
VALUES
('$_POST[no_plat_rexy]',
'$_POST[nama_mobil_rexy]',
'$_POST[brand_mobil_rexy]',
'$_POST[tipe_transmisi_rexy]')
");
if ($insert) {
    //Jika proses delete berhasil
    header("location:tampil_mobil.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_mobil.php'>Coba Lagi</a>";
}
