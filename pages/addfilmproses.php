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
    $objfilm->filmid = $_POST['filmid'];

    $poster_film = $_FILES['poster_film']['name'];
    $temp_file = $_FILES['poster_film']['tmp_name'];

    $target_dir = "./img/";
    $target_file = $target_dir . basename($poster_film);

    if (move_uploaded_file($temp_file, $target_file)) {
        $objfilm->poster_film = $poster_film;
        $objfilm->judul_film = $_POST['judul_film'];
        $objfilm->rilis_film = $_POST['rilis_film'];
        $objfilm->tanggal_upload = $_POST['tanggal_upload'];
        $objfilm->durasi_film = $_POST['durasi_film'];
        $objfilm->rating_film = $_POST['rating_film'];
        $objfilm->director_film = $_POST['director_film'];
        $objfilm->writer_film = $_POST['writer_film'];
        $objfilm->detail_film = $_POST['detail_film'];
        $objfilm->trailer_film = $_POST['trailer_film'];
        $objfilm->harga_film = $_POST['harga_film'];

        $file_film = $_FILES['file_film']['name'];
        $temp_file = $_FILES['file_film']['tmp_name'];
        $target_dir = "./videos/";
        $target_file = $target_dir . basename($file_film);

        if (move_uploaded_file($temp_file, $target_file)) {
            $objfilm->file_film = $file_film;
            $objfilm->AddFilm();

            if ($objfilm->hasil) {
                echo "<script> alert('" . $objfilm->message . "'); </script>";
                echo '<script> window.location = "?p=addfilmaktorandgenre";</script>';
            } else {
                echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";
            }
        } else {
            echo "<script> alert('Gagal mengunggah video film. Silakan coba lagi'); </script>";
        }
    } else {
        echo "<script> alert('Gagal mengunggah poster film. Silakan coba lagi'); </script>";
    }
}
?>