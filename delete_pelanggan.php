<?php
include "config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$no_plat_rexy = $_GET['nik_ktp_rexy'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_pelanggan_rexy WHERE
nik_ktp_rexy='$_GET[nik_ktp_rexy]'");
if ($delete) {
    //Jika proses delete berhasil
    header("location:tampil_pelanggan.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
}
