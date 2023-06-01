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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

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
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
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
            <input class="form-control me-2 rounded-5" type="search" placeholder="Cari film atau orang.." aria-label="Search">
            <button class="btn btn-outline-success rounded-5" type="submit">Cari</button>
        </form>
        </div>
        <a href="pages/login.php"><button class="btn btn-dark ms-md-3 rounded-5" style="background-color: #113250;">Masuk</button></a>
    </div>
    </nav>

    <div class="container mt-5 mb-5">
        <h3 class="mb-4">Trailer</h3>
        <hr>
        <div class="row">
            <div class="col-3 mb-3">
                <iframe style="border-radius: 10px;" width="100%" height="200" src="https://www.youtube.com/embed/d9MyW72ELq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-3 mb-3">
                <iframe style="border-radius: 10px;" width="100%" height="200" src="https://www.youtube.com/embed/1d0Zf9sXlHk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-3 mb-3">
                <iframe style="border-radius: 10px;" width="100%" height="200" src="https://www.youtube.com/embed/l3kB8Yty6_A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-3 mb-3">
                <iframe style="border-radius: 10px;" width="100%" height="200" src="https://www.youtube.com/embed/aOb15GVFZxU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-3 mb-3">
                <iframe style="border-radius: 10px;" width="100%" height="200" src="https://www.youtube.com/embed/1d0Zf9sXlHk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    

    <footer class="text-white pt-5" style="background-color: rgb(29, 34, 40)">
        <div class="footer-top mt-20 container">
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
            </div>
    </footer>
</body>

</html>