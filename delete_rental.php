<?php
include "config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$no_plat_rexy = $_GET['no_trx_rexy'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_rental_rexy WHERE
no_trx_rexy='$_GET[no_trx_rexy]'");
if ($delete) {
    //Jika proses delete berhasil
    header("location:tampil_rental.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
}
