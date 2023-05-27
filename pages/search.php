<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once('./class/class.film.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search | Bioskop 165</title>
</head>

<body>
    <div class='container-fluid px-5 py-5'>
        <?php
        $objFilm = new Film();
        $kata_cari = $_GET['query'];
        echo '<h1 class="fs-1 fw-semibold mb-5">Hasil Pencarian: '.$kata_cari.'</h1>';
        // Ambil query dari parameter GET
        $katacari = $_GET['query'];
        $searchResults = $objFilm->SearchFilm($katacari);
        // Tampilkan hasil pencarian
        if (count($searchResults) > 0) {
            echo '<div id="searchResults">';
            $shownTitles = array();
            $itemCount = 0; // Untuk menghitung jumlah item
            echo '<div class="row">';
            foreach ($searchResults as $dataFilm) {
                if (!in_array($dataFilm->judul_film, $shownTitles)) {
                    echo '<div class="col-2 pb-4 mb-2 px-3" style="position: relative;" style="padding-bottom: 100px;" id="posterfilm">';
                    echo '<a href="detail_film.php?judul_film=' . $dataFilm->judul_film . '">';
                    echo '<img src="./img/' . $dataFilm->poster_film . '" class="card-img-top rounded-3 posterfilm" alt="' . $dataFilm->judul_film . '">';
                    echo '<span class="label text-white fs-6 fw-3" style="position: absolute; left: 17px; top: 0px; width: 55px; height: 25px; border-top-left-radius: 8px; background-color: rgba(0,0,0,0.39);"><i class="bx bxs-star text-warning ps-1 px-1"></i>' . $dataFilm->rating_film . '</span>';
                    echo '</a>';
                    echo '</div>';
                    $shownTitles[] = $dataFilm->judul_film;
                }
            }
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div id="searchResults">No results found</div>';
        }
        ?>

    </div>
</body>

</html>