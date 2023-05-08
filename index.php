<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top py-0 px-2">
        <div class="container-fluid">
            <a href="index.php?p=home" class="navbar-brand"><img src="./img/logoheader.png" alt="" class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php?p=login" class="nav-link text-white">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=signup" class="nav-link text-white">Sign Up</a>
                    </li>
                </ul>
            </div>
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
        include($pages_dir . '/login.php');
    }
    ?>

    <footer class="bg-dark text-white pt-5">
        <div class="footer-top mt-20 container">
            <div class="row gy-4">
                <div class="col-lg-3">
                    <img class="logo w-50" src="..." alt="">
                </div>
                <div class="col-lg-2">
                    <h3 class="text-white">Brand</h3>
                    <ul class="list-unstyled">
                        <li><a href="?p=login" style="color: #fff; text-decoration: none;">Login</a></li>
                        <li><a href="?p=signup" style="color: #fff; text-decoration: none;">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="text-white">Contact</h3>
                    <ul class="list-unstyled">
                        <li>Address: Jl. TB Simatupang</li>
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
                        <p class="mb-0">© 2022 copyright all right reserved | Designed with by Film Ticketing</p>
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