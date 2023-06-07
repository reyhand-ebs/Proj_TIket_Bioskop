<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0F0E0E">
    <div class="container-fluid">
        <img src="img/bioskop online.png" width="170">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?p=home">Beranda</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Genre
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?p=genrepage">Adventure</a></li>
                <li><a class="dropdown-item" href="index.php?p=genrepage">Action</a></li>
                <li><a class="dropdown-item" href="index.php?p=genrepage">Comedy</a></li>
                <li><a class="dropdown-item" href="index.php?p=genrepage">Crime</a></li>
                <li><a class="dropdown-item" href="index.php?p=genrepage">Drama</a></li>
                <li><a class="dropdown-item" href="index.php?p=genrepage">Horror</a></li>
                <li><a class="dropdown-item" href="index.php?p=genrepage">Thriller</a></li>
                <li><a class="dropdown-item" href="index.php?p=genrepage">Romance</a></li>
            </ul>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2 rounded-5" type="search" placeholder="Cari film atau orang.." aria-label="Search">
            <a href="index.php?p=searchpage"><button class="btn btn-outline-success rounded-5" type="submit">Cari</button></a> 
        </form>
        </div>
        <a href="index.php?p=login"><button class="btn btn-dark ms-md-3 rounded-5" style="background-color: #AC2222;">Login</button></a>
        <a href="index.php?p=register"><button class="btn btn-dark ms-md-3 rounded-5" style="background-color: #113250;">Register</button></a>
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

<footer class="bg-black text-white pt-5">
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