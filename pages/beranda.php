<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beranda | Bioskop 165</title>
</head>

<body>
    <div class="container-fluid">
        <div class="terlaris p-5">
            <h2 class="fs-1 fw-bolder mb-4">Film Terbaru</h2>
            <?php
            require_once('./class/class.film.php');
            $objFilm = new Film();
            $arrayResult = $objFilm->SelectNewestFilms();

            if (count($arrayResult) == 0) {
                echo '<div><td colspan="6">Tidak ada data!</td></div>';
            } else {
                echo '<div class="row">';
                foreach ($arrayResult as $dataFilm) {
                    echo '<div class="col-lg-2 col-md-4 pb-4 mb-2 px-3" style="position: relative;" id="posterfilm">';
                    echo '<a href="detail_film.php?judul_film=' . $dataFilm->judul_film . '">';
                    echo '<img src="./img/' . $dataFilm->poster_film . '" class="card-img-top rounded-3 posterfilm" alt="' . $dataFilm->judul_film . '">';
                    echo '<span class="label text-white fs-6 fw-3" style="position: absolute; left: 16px; top: 0px; width: 55px; height: 25px; border-top-left-radius: 8px; background-color: rgba(0,0,0,0.39);"><i class="bx bxs-star text-warning ps-1 px-1"></i>' . $dataFilm->rating_film . '</span>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>
        <hr class="hr" /> <!--Pemisah atau devider-->
        <div class="Rekomendasi mb-3 p-5">
            <h2 class="fs-1 fw-bolder mb-4">Film Populer</h2>
            <?php
            $objFilm = new Film();
            $arrayResult = $objFilm->SelectAllFilmByRating();

            if (count($arrayResult) == 0) {
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            } else {
                echo '<div class="row">';
                foreach ($arrayResult as $dataFilm) {
                    echo '<div class="col-lg-2 col-md-4 pb-4 mb-2 px-3" style="position: relative;" style="padding-bottom: 100px;" id="posterfilm">';
                    echo '<a href="detail_film.php?judul_film=' . $dataFilm->judul_film . '">';
                    echo '<img src="./img/' . $dataFilm->poster_film . '" class="card-img-top rounded-3 posterfilm" alt="' . $dataFilm->judul_film . '">';
                    echo '<span class="label text-white fs-6 fw-3" style="position: absolute; left: 16px; top: 0px; width: 55px; height: 25px; border-top-left-radius: 8px; background-color: rgba(0,0,0,0.39);"><i class="bx bxs-star text-warning ps-1 px-1"></i>' . $dataFilm->rating_film . '</span>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>
        <hr class="hr" /> <!--Pemisah atau devider-->
        <div class="terlaris p-5">
            <h2 class="fs-1 fw-bolder mb-4">Film Action</h2>
            <?php
            $objFilm = new Film();
            $genre = "Action"; // spesifik buat genrenya
            $arrayResult = $objFilm->SelectAllFilmRatingByGenre($genre);

            if (count($arrayResult) == 0) {
                echo '<div><td colspan="6">Tidak ada data!</td></div>';
            } else {
                echo '<div class="row">';
                foreach ($arrayResult as $dataFilm) {
                    echo '<div class="col-lg-2 col-md-4 pb-4 mb-2 px-3" style="position: relative;" id="posterfilm">';
                    echo '<a href="detail_film.php?judul_film=' . $dataFilm->judul_film . '">';
                    echo '<img src="./img/' . $dataFilm->poster_film . '" class="card-img-top rounded-3 posterfilm" alt="' . $dataFilm->judul_film . '">';
                    echo '<span class="label text-white fs-6 fw-3" style="position: absolute; left: 16px; top: 0px; width: 55px; height: 25px; border-top-left-radius: 8px; background-color: rgba(0,0,0,0.39);"><i class="bx bxs-star text-warning ps-1 px-1"></i>' . $dataFilm->rating_film . '</span>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>
        <hr class="hr" />
        <div class="terlaris p-5">
            <h2 class="fs-1 fw-bolder mb-4">Film Horror</h2>
            <?php
            $objFilm = new Film();
            $genre = "Horror"; // spesifik buat genrenya
            $arrayResult = $objFilm->SelectAllFilmRatingByGenre($genre);

            if (count($arrayResult) == 0) {
                echo '<div><td colspan="6">Tidak ada data!</td></div>';
            } else {
                echo '<div class="row">';
                foreach ($arrayResult as $dataFilm) {
                    echo '<div class="col-lg-2 col-md-4 pb-4 mb-2 px-3" style="position: relative;" id="posterfilm">';
                    echo '<a href="detail_film.php?judul_film=' . $dataFilm->judul_film . '">';
                    echo '<img src="./img/' . $dataFilm->poster_film . '" class="card-img-top rounded-3 posterfilm" alt="' . $dataFilm->judul_film . '">';
                    echo '<span class="label text-white fs-6 fw-3" style="position: absolute; left: 16px; top: 0px; width: 55px; height: 25px; border-top-left-radius: 8px; background-color: rgba(0,0,0,0.39);"><i class="bx bxs-star text-warning ps-1 px-1"></i>' . $dataFilm->rating_film . '</span>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>
        <hr class="hr" /> <!--Pemisah atau devider-->

    </div>
</body>

</html>