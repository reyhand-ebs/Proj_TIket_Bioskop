<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include('./inc.koneksi.php');
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
        echo "<h1>Search Result: $kata_cari</h1>";
        // Ambil query dari parameter GET
        $katacari = $_GET['query'];
        $searchResults = $objFilm->SearchFilm($katacari);
        // Tampilkan hasil pencarian
        if (count($searchResults) > 0) {
            echo '<div class="container-fluid" id="searchResults">';
            $shownTitles = array();
            $itemCount = 0; // Untuk menghitung jumlah item
            echo "<div class='row'>";
            foreach ($searchResults as $dataFilm) {
                if (!in_array($dataFilm->judul_film, $shownTitles)) {
                    if ($itemCount % 6 == 0 && $itemCount != 0) {
                        echo "</div><div class='row py-3'>"; // Membuat baris baru setiap mencapai 6 item
                    }
                    echo '<div class="card px-0 mx-2" style="width: 12rem;">';
                    echo '<img src="./img/' . $dataFilm->poster_film . '" class="card-img-top object-fit-fill" alt="'.$dataFilm->poster_film.'">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $dataFilm->judul_film . '</h5>';
                    echo '<p class="card-text limit-words">' . $dataFilm->detail_film . '</p>';
                    echo '</div>';
                    echo '<div class="card-footer align-items-center">';
                    echo '<a href="#" class="btn btn-primary">Baca Selengkapnya</a>';
                    echo '</div>';
                    echo '</div>';
                    $shownTitles[] = $dataFilm->judul_film;
                    $itemCount++; // Menambah jumlah item
                }
            }
            echo '</div>';
        } else {
            echo '<div id="searchResults">No results found</div>';
        }
        ?>

    </div>
</body>

</html>