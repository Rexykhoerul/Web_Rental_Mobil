<?php
session_start();
if (empty($_SESSION['username_rexy']) and empty($_SESSION['password_rexy'])) {
    echo "<script>alert('Anda tidak memiliki akses'); window.location =
'login.php'</script>";
} else {

?>

    <!DOCTYPE html>
    <html lang="en" class="dark">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RMP : Edit Rental</title>

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Styles -->
        <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/lib/unix.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <?php include "menu.php"; ?>

        <div class="header">
            <div class="pull-left">
                <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>RENTAL MOBIL PREMIUM</span></a></div>
                <div class="hamburger sidebar-toggle">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="pull-right p-r-15">
                <ul>
                    <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> rexy <i class="ti-angle-down f-s-10"></i></span>
                        <div class="drop-down dropdown-profile">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="logout.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1>HALAMAN EDIT DATA RENTAL</h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div id="main-content">
                        <div class="row">
                            <!-- /# column -->
                            <div class="col-lg-12">
                                <div class="card alert">
                                    <div class="card-header">
                                        <h4>Edit Data Rental</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form method="POST" action="fungsi_edit_rental.php">
                                                <?php
                                                include "config/koneksi.php";
                                                $no_trx_rexy = $_GET['no_trx_rexy'];
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rexy WHERE no_trx_rexy='$no_trx_rexy'");
                                                $data = mysqli_fetch_array($tampil);
                                                ?>
                                                <div class="form-group">
                                                    <label for="no_trx_rexy" class="form-label">No Transaksi :</label>
                                                    <input type="hidden" name="no_tmp_trx_rexy" value="<?= $data['no_trx_rexy'] ?>" class="form-control" id="no_tmp_trx_rexy">
                                                    <input type="text" name="no_trx_rexy" value="<?= $data['no_trx_rexy'] ?>" class="form-control" id="no_trx_rexy" placeholder="Masukan No Transaksi" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik_ktp_rexy" class="form-label">NIK KTP :</label>
                                                    <input type="number" name="nik_ktp_rexy" value="<?= $data['nik_ktp_rexy'] ?>" class="form-control" id="nik_ktp_rexy" placeholder="Masukan NIK KTP" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_plat_rexy" class="form-label">No Plat :</label>
                                                    <input type="text" name="no_plat_rexy" value="<?= $data['no_plat_rexy'] ?>" class="form-control" id="no_plat_rexy" placeholder="Masukan No Plat" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_rental_rexy" class="form-label">Tanggal Rental :</label>
                                                    <input type="date" name="tgl_rental_rexy" value="<?= $data['tgl_rental_rexy'] ?>" class="form-control" id="tgl_rental_rexy" placeholder="Masukan Tanggal Rental" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jam_rental_rexy" class="form-label">Jam Rental :</label>
                                                    <input type="time" name="jam_rental_rexy" value="<?= $data['jam_rental_rexy'] ?>" class="form-control" id="jam_rental_rexy" placeholder="Masukan Jam Rental" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_rexy" class="form-label">Harga :</label>
                                                    <input type="text" name="harga_rexy" value="<?= $data['harga_rexy'] ?>" class="form-control" id="harga_rexy" placeholder="Masukan Harga" required oninput="hitungTotalBayar()">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lama_rexy" class="form-label">Lama Rental :</label>
                                                    <input type="text" name="lama_rexy" value="<?= $data['lama_rexy'] ?>" class="form-control" id="lama_rexy" placeholder="Masukan Lama Rental" required oninput="hitungTotalBayar()">
                                                </div>
                                                <div class="form-group">
                                                    <label for="total_rexy" class="form-label">Total Bayar :</label>
                                                    <input type="text" name="total_rexy" value="<?= $data['total_rexy'] ?>" class="form-control" id="total_rexy" placeholder="Masukan Total Bayar" required readonly>
                                                </div>
                                                <a href="tampil_rental.php" class="btn btn-rounded btn-danger">Kembali</a> <button type="submit" class="btn btn-rounded btn-primary">Perbaharui</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                        <!-- /# row -->


                    </div>
                </div>
            </div>
        </div>






        <!-- jquery vendor -->
        <script src="assets/js/lib/jquery.min.js"></script>
        <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="assets/js/lib/menubar/sidebar.js"></script>
        <script src="assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="assets/js/lib/bootstrap.min.js"></script>
        <!-- bootstrap -->
        <script src="assets/js/scripts.js"></script>
        <!-- scripit init-->





    </body>
    <script>
    // Fungsi untuk menghitung total pembayaran
    function hitungTotalBayar() {
        // Ambil nilai lama dan harga
        var lama = document.getElementById('lama_rexy').value;
        var harga = document.getElementById('harga_rexy').value;

        // Validasi untuk memastikan lama dan harga memiliki nilai numerik
        if (!isNaN(lama) && !isNaN(harga)) {
            // Hitung total pembayaran
            var totalBayar = lama * harga;

            // Tampilkan hasil pada input total_rexy
            document.getElementById('total_rexy').value = totalBayar;
        } else {
            // Handle jika input lama atau harga bukan angka
            alert('Masukkan nilai numerik untuk Lama dan Harga.');
        }
    }

    // Tambahkan event listener pada input lama_rexy
    document.getElementById('lama_rexy').addEventListener('input', hitungTotalBayar);
</script>

<?php } ?>

    </html>