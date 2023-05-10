<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tubirit | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section>
        <div class="landing"> <!-- INI SECTION CAROUSEL -->
            <div id="carouselExampleCaptions" class="carousel slide roomcarousel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active carouselnostretch2" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        class="carouselnostretch2" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        class="carouselnostretch2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src=" " class="d-block w-100 carouselimg" alt="...">
                        <div class="carousel-caption d-block carouselnostretch">
                            <h4>『Welcome to Bioskop Online』</h4>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src=" " class="d-block w-100 carouselimg" alt="...">
                        <div class="carousel-caption d-block carouselnostretch">
                            <h4>Featured: Tomahawk Steak</h4>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="category-accesories.php"><img src=" " class="d-block w-100 carouselimg" alt="..."></a>
                        <div class="carousel-caption d-block carouselnostretch">
                            <h5>Check out our Accessories</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DIATAS CAROUSEL, DIBAWAH BAGIAN CARDS DAN SISANYA-->

        <section class="container my-5">
            <div class="card text-center w-75 mx-auto">
                <div class="card-header">
                    Featured
                </div>
                <img src=" " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tomahawk Steak</h5>
                    <p class="card-text">Menu terbatas kita, Steak Tomahawk hanya 65k per porsi.</p>
                    <a href="#" class="btn btn-secondary">Pesan</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>

            <br>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Panggang</h5>
                            <p class="card-text">Ayam panggang spesial kami dengan saus sambal yang juga spesial.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Borgir Longboi</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Goreng</h5>
                            <p class="card-text">Menu klasik. Nasi goreng komplit dengan opsi pedas.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!--THIS IS THE ACCESSORIES TRANSITION-->
        <div class="transition transitionitem">
            <p class="transitiontext"><b>Accessories</b></p> <!--THIS IS THE ACCESSORIES TRANSITION-->
        </div>
        <!--THIS^ IS THE ACCESSORIES TRANSITION-->

        <section class="container my-5">

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row d-flex justify-content-center my-3">
                <a href="category-accesories.php" class="btn btn-secondary viewmore">View more</a>
            </div>

        </section>

        <!-- END OF ACCESSORIES.-->
        <!-- BELOW IS CATEGORIES-->
        <h3 class="popularcategories">Popular Categories</h3>

        <section class="container my-5">
            <div class="row d-flex justify-content-center my-3 row-cols-1 row-cols-md-3 g-4 container">


                <div class="col justify-content-center">
                    <div class="card bg-light text-white">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title popular"><b>Fashion</b></h5>
                        </div>
                    </div>
                </div>

                <div class="col justify-content-center">
                    <a href="category-accesories.php">

                        <div class="card bg-light text-white">
                            <img src=" " class="card-img-top" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title popular"><b>Accessories</b></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col justify-content-center">
                    <div class="card bg-light text-white">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title popular"><b>Beverages</b></h5>
                        </div>
                    </div>
                </div>

                <div class="col justify-content-center">
                    <div class="card bg-light text-white">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title popular"><b>Food</b></h5>
                        </div>
                    </div>
                </div>

                <div class="col justify-content-center">
                    <div class="card bg-light text-white">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title popular"><b>Mocha</b></h5>
                        </div>
                    </div>
                </div>



            </div>
        </section>
    </section>
</body>

</html>