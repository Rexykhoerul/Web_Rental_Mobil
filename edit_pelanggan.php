<?php
session_start();
if (empty($_SESSION['username_rexy']) and empty($_SESSION['password_rexy'])) {
    echo "<script>alert('Anda tidak memiliki akses'); window.location =
'login.php'</script>";
} else {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RMP : Edit Pelanggan</title>

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
                    <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span
                            class="user-avatar"> rexy <i class="ti-angle-down f-s-10"></i></span>
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
                                    <h1>HALAMAN DATA PELANGGAN</h1>
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
                                        <h4>Silahkan Input Data </h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form method="POST" action="fungsi_edit_pelanggan.php">
                                                <?php
                                                include "config/koneksi.php";
                                                $nik_ktp_rexy = $_GET['nik_ktp_rexy'];
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_rexy WHERE nik_ktp_rexy='$nik_ktp_rexy'");
                                                $data = mysqli_fetch_array($tampil);
                                                ?>
                                                <div class="form-group">
                                                    <label for="nik_ktp_rexy" class="form-label">No KTP :</label>
                                                    <input type="hidden" name="nik_ktp_tmp_rexy"
                                                        value="<?= $data['nik_ktp_rexy'] ?>" class="form-control"
                                                        id="nik_ktp_tmp_rexy">
                                                    <input type="text" name="nik_ktp_rexy"
                                                        value="<?= $data['nik_ktp_rexy'] ?>" class="form-control"
                                                        id="nik_ktp_rexy" placeholder="Masukan No KTP">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_rexy" class="form-label">Nama Pelanggan :</label>
                                                    <input type="text" name="nama_rexy"
                                                        value="<?= $data['nama_rexy'] ?>" class="form-control"
                                                        id="nama_rexy" placeholder="Masukan Nama Mobil" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp_rexy" class="form-label">No HP :</label>
                                                    <input type="number" name="no_hp_rexy"
                                                        value="<?= $data['no_hp_rexy'] ?>" class="form-control"
                                                        id="no_hp_rexy" placeholder="Masukan No HP" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_rexy" class="form-label">Alamat :</label>
                                                    <textarea type="text" name="alamat_rexy" class="form-control"
                                                        id="alamat_rexy" placeholder="Masukan Alamat" required><?= $data['alamat_rexy'] ?>
                                                        </textarea>
                                                </div>
                                                <a href="tampil_pelanggan.php" class="btn btn-rounded btn-danger">Kembali</a> <button
                                                    type="submit" class="btn btn-rounded btn-primary">Perbaharui</button>
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
<?php } ?>

</html>