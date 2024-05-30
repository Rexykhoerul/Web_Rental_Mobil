<?php
session_start();
if (!empty($_SESSION['username_rexy']) and !empty($_SESSION['password_rexy'])) {
    header("location:tampil_mobil.php");
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rental Mobil Premium : Login</title>

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
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>RENTAL MOBIL PREMIUM</span></a>
                        </div>
                        <div class="login-form">
                            <h4>LOGIN</h4>
                            <form action="cek_login.php" method="POST">
                                <div class="form-group">
                                <label for="username" class="form-label">Username :</label>
                                            <input type="text" name="username_rexy" class="form-control" id="username_rexy" placeholder="Masukan Username" required>
                                </div>
                                <div class="form-group">
                                <label for="password" class="form-label">Password :</label>
                                            <input type="password" name="password_rexy" class="form-control" id="password_rexy" placeholder="Masukan Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="social-login-content">
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Copyright © 2024 Rexy Khoerul Sukma</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
}
?>
</html>