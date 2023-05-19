<?php
include('./inc.koneksi.php');
require_once('./class/class.film.php');

if (isset($_POST['btnLogin'])) {
    $kata_cari = $_POST['kata_cari'];

    $objFilm = new Film();
    $objFilm->SelectAllFilm($judul_film);

    //if ($objFilm->)
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beranda | Bioskop 165</title>
</head>

<body>
    <!-- search -->
    <form method="GET" action="index.php" style="text-align: center;">
		<label>Search : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <h2>Film Terlaris</h2>
        <div class="row">
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" alt="">
            </div>
        </div>
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
</body>

</html>