<?php
include('./inc.koneksi.php');
require_once('./class/class.user.php');

if (isset($_POST['btnSubmit'])) {
    $password = $_POST["newpass"];
    $repassword = $_POST["renewpass"];

    $objUser = new User();
    $objUser->ValidateTokenNew($_GET['t']);
    if ($objUser->hasil) {
        if (strlen($password) < 8) {
            echo "<script>alert('Password harus terdiri dari minimal 8 karakter');</script>";
        } else if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
            echo "<script>alert('Password hanya boleh terdiri dari huruf abjad dan angka');</script>";
        } else if ($password == strtolower($password)) {
            echo "<script>alert('Password harus mengandung huruf kapital');</script>";
        } else if ($password != $repassword) {
            echo "<script>alert('Kata sandi tidak sama');</script>";
        } else {
            $objUser->password = password_hash($password, PASSWORD_DEFAULT);
            $objUser->UpdateUser();
            echo "<script> alert('Password berhasil diubah, silahkan masuk kembali ke akun anda'); </script>";
            echo '<script> window.location="index.php?p=login"; </script>';
        }
    } else {
        //data tidak ditemukan
        echo '<div class="alert alert-warning">Invalid Token!</div>';
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Masukkan Kata Sandi | Bioskop 165</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top py-0 px-2">
        <div class="container-fluid">
            <a href="" class="navbar-brand disabled"><img src="./img/bioskop online.png" alt="logo bioskop"
                    class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fs-6">
                    <li class="nav-item">
                        <a href="index.php?p=beranda" class="nav-link disabled text-white">Home</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex mx-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-md btn-outline-success" type="submit">Search</button>
            </form>
            <button class="btn btn-md btn-primary ms-md-3 rounded-3 disabled">Login</button>
            <button class="btn btn-md btn-outline-primary ms-md-3 rounded-3 disabled">Register</button>
        </div>
    </nav>
    <div class="container py-5 justify-content-center rounded-5" id="inputlogin">
        <div class="row">
            <div class="col align-self-center">
                <h1 class="title pb-5 text-center"><strong>Masukkan Kata Sandi</strong></h1>
                <form action="" class="row g-3 justify-content-center" method="POST">
                    <div class="col-md-10">
                        <!-- <label for="newpass">Kata Sandi Baru: </label> -->
                        <input type="password" class="form-control mt-2 form-control-lg rounded-pill" placeholder="Kata Sandi Baru"
                            name="newpass" required>
                    </div>
                    <div class="col-md-10">
                        <!-- <label for="renewpass">Konfirmasi Kata Sandi Baru :</label> -->
                        <input type="password" class="form-control mt-2 form-control-lg rounded-pill" placeholder="Konfirmasi Kata Sandi Baru"
                            name="renewpass" required>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" name="btnSubmit" type="submit"
                            value="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white pt-5">
        <div class="footer-top mt-20 container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <img class="logo w-75" src="./img/bioskop online.png" alt="">
                </div>
                <div class="col-lg-3">
                    <h3 class="text-white fs-2">Brand</h3>
                    <ul class="list-unstyled">
                        <li><a href="?p=login" style="color: #fff; text-decoration: none;">Login</a></li>
                        <li><a href="?p=signup" style="color: #fff; text-decoration: none;">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <h3 class="text-white fs-2">Contact</h3>
                    <ul class="list-unstyled">
                        <li>Address: Jl. TB Simatupang</li>
                        <li>Email: afifah.k.rusli@students.esqbs.ac.id</li>
                        <li>Email: muhammad.aldy.f@students.esqbs.ac.id</li>
                        <li>Email: khaira.isyara@students.esqbs.ac.id</li>
                        <li>Email: chikal.mulia@students.esqbs.ac.id</li>
                        <li>Email: damar.adji.s@students.esqbs.ac.id</li>
                        <li>Email: refido.arjunal.a@students.esqbs.ac.id</li>
                        <li>Email: mohamad.reyhand.f@students.esqbs.ac.id</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">© 2022 copyright all right reserved | Designed with by Bioskop 165</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</body>

</html>