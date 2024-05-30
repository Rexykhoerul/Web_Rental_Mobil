<?php
include "config/koneksi.php";
$i = 0;
$keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rexy
WHERE nama_mobil_rexy like '%$keyword%'");
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
    <title>Cari Data Mobil</title>
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
                        <a href='tampil_mobil.php' class='btn btn-warning'> Kembali</a>
                    </div>
                    <div class="col-md-6 ">
                        <form action="cari_mobil.php" method="GET">
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
                                    <th>No Plat</th>
                                    <th>Nama Mobil</th>
                                    <th>Brand Mobil</th>
                                    <th>Tipe Transmisi</th>
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
                                    <td><?= $data['no_plat_rexy'] ?></td>
                                    <td><?= $data['nama_mobil_rexy'] ?></td>
                                    <td><?= $data['brand_mobil_rexy'] ?></td>
                                    <td><?= $data['tipe_transmisi_rexy'] ?></td>
                                    <td>
                                        <a href="edit_mobil.php?no_plat_rexy=<?= $data['no_plat_rexy'] ?>" class='btn btn-primary'>Edit</a>
                                        <a href="delete_mobil.php?no_plat_rexy=<?= $data['no_plat_rexy'] ?>" class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
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