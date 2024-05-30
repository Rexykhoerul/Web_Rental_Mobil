<?php
session_start();
if (empty($_SESSION['username_rexy']) and empty($_SESSION['password_rexy'])) {
    echo "<script>alert('Anda tidak memiliki akses'); window.location =
'login.php'</script>";
} else {

    // Mendapatkan nomor transaksi otomatis berdasarkan tanggal
    $trx = 'TRX - ' . date('YmdHis');
    ?>

    <!DOCTYPE html>
    <html lang="en" class="dark">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RMP : Tambah Rental</title>

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
                    <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/zia.jpg" alt="" /> <span
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
                                    <h1>Tambah Data Rental</h1>
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
                                        <h4>Tabel Data Rental</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form method="POST" action="fungsi_tambah_rental.php">
                                                <div class="form-group">
                                                    <label for="no_trx_rexy" class="form-label">No Transaksi</label>
                                                    <!-- Gunakan nomor transaksi yang dihasilkan secara otomatis -->
                                                    <input type="text" name="no_trx_rexy" id="no_trx_rexy"
                                                        class="form-control" placeholder="Masukkan NIK"
                                                        value="<?php echo $trx; ?>" readonly required>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nik_ktp_rexy" class="form-label">Pilih Pelanggan</label>
                                            <select class="form-control" name="nik_ktp_rexy" id="nik_ktp_rexy" required>
                                                <option value=""> -- Pilih Pelanggan --</option>
                                                <?php
                                                include "config/koneksi.php";
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_rexy");
                                                while ($data = mysqli_fetch_array($tampil)) {
                                                    echo "<option value='$data[nik_ktp_rexy]'>$data[nik_ktp_rexy] - $data[nama_rexy] </option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_plat_rexy" class="form-label">Pilih Mobil</label>
                                            <select class="form-control" name="no_plat_rexy" id="no_plat_rexy" required>
                                                <option value=""> -- Pilih Mobil --</option>
                                                <?php
                                                include "config/koneksi.php";
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rexy");
                                                while ($data = mysqli_fetch_array($tampil)) {
                                                    echo "<option value='$data[no_plat_rexy]'>$data[no_plat_rexy] - $data[nama_mobil_rexy] </option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_rental_rexy" class="form-label">Tanggal Ambil</label>
                                            <input type="date" name="tgl_rental_rexy" id="tgl_rental_rexy"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jam_rental_rexy" class="form-label">Jam Ambil</label>
                                            <input type="time" name="jam_rental_rexy" id="jam_rental_rexy"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="lama_rexy" class="form-label">Lama Rental</label>
                                            <input type="number" name="lama_rexy" id="lama_rexy" class="form-control"
                                                oninput="hitungTotalBayar()" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_rexy" class="form-label">Harga Rental</label>
                                            <input type="text" name="harga_rexy" id="harga_rexy"
                                                class="form-control money" oninput="hitungTotalBayar()" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_rexy" class="form-label">Total Bayar</label>
                                            <input type="text" name="total_rexy" id="total_rexy" readonly
                                                class="form-control money" required>
                                        </div>
                                        <a href="tampil_pelanggan.php" class="btn btn-rounded btn-danger">Kembali</a>
                                        <button type="submit" class="btn btn-rounded btn-primary">Submit</button>
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
        // Fungsi untuk menghitung total bayar
        function hitungTotalBayar() {
            // Ambil nilai lama dan harga dari input form
            var lama = document.getElementById("lama_rexy").value;
            var harga = document.getElementById("harga_rexy").value;

            // Hitung total bayar
            var totalBayar = lama * harga;

            // Set nilai total bayar pada input form yang sesuai
            document.getElementById("total_rexy").value = totalBayar;
        }
    </script>

<?php } ?>

</html>