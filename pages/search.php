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
            foreach ($searchResults as $row) {
                if (!in_array($row->judul_film, $shownTitles)) {
                    echo "<div class='row'>";
                    echo "<div class='col-2 mb-3'>";
                    echo "<img src='" . $row->poster_film . "' class='card-img-top' alt='" . $row->judul_film . "'>";
                    echo "<p>" . $row->judul_film . "</p>";
                    echo "<p>" . $row->detail_film . "</p>";
                    echo "<p>" . $row->rilis_film . "</p>";
                    echo "<p>" . $row->nama_aktor . "</p>";
                    echo "</div>";
                    echo "</div>";
                    $shownTitles[] = $row->judul_film;
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