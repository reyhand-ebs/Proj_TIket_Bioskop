<?php
	if (!isset($_SESSION)) {
		session_start();
	}
include('inc.koneksi.php');
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Menangani peristiwa klik pada tombol "Cari"
            $("#searchButton").on('click', function () {
                search();
            });

            // Menangani peristiwa tekan tombol "Enter" di dalam input pencarian
            $("#searchInput").on('keydown', function (event) {
                if (event.keyCode === 13) { // 13 adalah kode tombol "Enter"
                    search();
                    return false;
                }
            });

            // Fungsi pencarian
            function search() {
                var query = $("#searchInput").val();
                if (query !== '') {
                    window.location.href = "index.php?p=search&query=" + query;
                }
            }
            var limitWords = document.getElementsByClassName('limit-words');
            for (var i = 0; i < limitWords.length; i++) {
                var text = limitWords[i].textContent;
                var words = text.split(' ');
                if (words.length > 15) {
                    var limitedText = words.slice(0, 15).join(' ');
                    limitWords[i].textContent = limitedText + '...';
                }
            }
        });
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top py-0 px-2">
        <div class="container-fluid">
            <a href="index.php?p=home" class="navbar-brand"><img src="./img/bioskop online.png" alt="logo bioskop"
                    class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fs-6">
                    <li class="nav-item">
                        <a href="index.php?p=home" class="nav-link text-white">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Adventure</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Comedy</a></li>
                            <li><a class="dropdown-item" href="#">Crime</a></li>
                            <li><a class="dropdown-item" href="#">Drama</a></li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li><a class="dropdown-item" href="#">Thriller</a></li>
                            <li><a class="dropdown-item" href="#">Romance</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <form class="d-flex mx-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari Film atau Genre" aria-label="Search"
                    id="searchInput">
                <button class="btn btn-md btn-outline-success" type="button" onclick="search()"
                    id="searchButton">Cari</button>
            </form>
            <a href="index.php?p=login"><button class="btn btn-md btn-primary ms-md-3 rounded-3">Masuk</button></a>
            <a href="index.php?p=register"><button
                    class="btn btn-md btn-outline-primary ms-md-3 rounded-3">Daftar</button></a>
        </div>
    </nav>

    <?php
    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if (in_array($p . '.php', $pages)) {
            include($pages_dir . '/' . $p . '.php');
        } else {
            echo 'Halaman tidak ditemukan! :(';
        }
    } else {
        include($pages_dir . '/home.php');
    }
    ?>

    <footer class="bg-dark text-white pt-5">
        <div class="footer-top mt-20 container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <img class="logo w-75" src="./img/bioskop online.png" alt="">
                </div>
                <div class="col-lg-3">
                    <h3 class="text-white fs-2">Brand</h3>
                    <ul class="list-unstyled">
                        <li><a href="?p=signup" style="color: #fff; text-decoration: none;">Beranda</a></li>
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