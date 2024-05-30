<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_tmp_rexy = $_POST['no_plat_tmp_rexy'];
$no_plat_rexy = $_POST['no_plat_rexy'];
$nama_mobil_rexy = $_POST['nama_mobil_rexy'];
$brand_mobil_rexy = $_POST['brand_mobil_rexy'];
$tipe_transmisi_rexy = $_POST['tipe_transmisi_rexy'];
//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_mobil_rexy SET
no_plat_rexy='$no_plat_rexy',
nama_mobil_rexy='$nama_mobil_rexy',
brand_mobil_rexy='$brand_mobil_rexy',
tipe_transmisi_rexy='$tipe_transmisi_rexy'
WHERE no_plat_rexy='$no_plat_tmp_rexy'
");
if ($update) {
    //Jika proses delete berhasil
    header("location:tampil_mobil.php");
} else {
    //Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_mobil.php'>Coba Lagi</a>";
}
