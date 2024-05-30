<?php
include "config/koneksi.php";
$i = 0;
$keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_rexy
WHERE nama_rexy like '%$keyword%'");
?>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Pelanggan</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <?php include "menu.php"; ?>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header">Hasil Pencarian : keyword
                "<b><?= $keyword ?></b>"</div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-6 mb-2 ">
                        <a href='tampil_pelanggan.php' class='btn btn-warning'> Kembali</a>
                    </div>
                    <div class="col-md-6 ">
                        <form action="cari_pelanggan.php" method="GET">
                            <div class="btn-group float-end" role="group">
                                <input type="text" name="keyword" class="form-control" placeholder="Masukan keyword">
                                <button type="button" class="btn btn-primary">Pencarian</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            </tbody>
                            <?php
                            while ($data = mysqli_fetch_array($tampil)) {
                                $i++;
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $data['nik_ktp_rexy'] ?></td>
                                    <td><?= $data['nama_rexy'] ?></td>
                                    <td><?= $data['no_hp_rexy'] ?></td>
                                    <td><?= $data['alamat_rexy'] ?></td>
                                    <td>
                                        <a href="edit_pelanggan.php?nik_ktp_rexy=<?= $data['nik_ktp_rexy'] ?>" class='btn btn-primary'>Edit</a>
                                        <a href="delete_pelanggan.php?nik_ktp_rexy=<?= $data['nik_ktp_rexy'] ?>" class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
<?php } ?>
</html>