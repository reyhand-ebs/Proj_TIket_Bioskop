<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: rgb(29, 34, 40)">
    <div class="container-fluid">
        <img src="img/bioskop online.png" width="170">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Film Saya</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2 rounded-4" type="search" placeholder="Cari film atau orang.." aria-label="Search">
            <button class="btn btn-outline-success rounded-4" type="submit">Cari</button>
        </form>
        </div>
        <a href="pages/login.php"><button class="btn btn-dark ms-md-3 rounded-4" style="background-color: #C70039;">Masuk</button></a>
    </div>
    </nav>

    <!-- carosel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style='height: 410px;'>
        <div class="carousel-item active">
        <img src="img/promo1.jpg" class="d-block w-100" style='height: 410px;' alt="">
        </div>
        <div class="carousel-item">
        <img src="img/promo2.jpg" class="d-block w-100" style='height: 410px;' alt="">
        </div>
        <div class="carousel-item">
        <img src="img/promo3.jpg" class="d-block w-100" style='height: 410px;' alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <!-- card -->
    <section class="p-5">
    <h2 style="padding-left: 10px;">Film Terlaris</h2>
        <div class="container">
            <div class="row text-center g-4 ">
                <div class="col-md">
                    <img src="img/avatar.jpg" class="card-img-top" alt="">
                    </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/avengers.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/titanic.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/avengers1.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/spiderman.jpg" class="card-img-top" alt=""> 
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/jurasic.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/lion.jpg" class="card-img-top" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-6">
    <h2 style="padding-left: 55px;">Apa yang Baru?</h2>
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/antman.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/gotg1.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/creed.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/marvels.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/aquaman.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/mermaid.jpg" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                    <img src="img/jhon.jpg" class="card-img-top" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<br></br>

    <footer class="text-white pt-5" style="background-color: rgb(29, 34, 40)">
        <!--<div class="footer-top mt-20 container">
            <div class="row gy-4">
                <div class="col-lg-3">
                    <img class="logo w-50" src="img/bisokop online.png" alt="">
                </div>
                <div class="col-lg-2">
                    <h3 class="text-white">Brand</h3>
                    <ul class="list-unstyled">
                        <li><a href="?p=home" style="color: #fff; text-decoration: none;">Home</a></li>
                        <li><a href="?p=explore" style="color: #fff; text-decoration: none;">Explore</a></li>
                        <li><a href="?p=contact" style="color: #fff; text-decoration: none;">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="text-white">Contact</h3>
                    <ul class="list-unstyled">
                        <li>Address: Jl. TB Simatupang</li>
                        <li>Email: @students.esqbs.ac.id</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">© 2022 </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>-->
    </footer>
</body>

</html>