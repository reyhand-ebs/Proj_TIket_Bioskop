<?php
require_once('./class/class.film.php');
require_once('./class/class.aktor.php');
require_once('./class/class.genre.php');

$objfilm = new Film();
$objaktor = new Aktor();
$aktorList = $objaktor->SelectAllAktor();
$objgenre = new Genre();
$genreList = $objgenre->SelectAllGenre();

if (isset($_POST['btnTambah'])) {
    $objfilm->film_id = $_POST['filmid'];
    $objfilm->genre_id = $_POST['genreid'];
    $objfilm->aktor_id = $_POST['aktorid'];
    $objfilm->AddFilmGenre();
    $objfilm->AddFilmAktor();
    
    if ($objfilm->hasil) {
        echo "<script> alert('" . $objfilm->message . "'); </script>";
        echo '<script> window.location = "?p=filmlist";</script>';
    } else {
        echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";
    }
}
?>