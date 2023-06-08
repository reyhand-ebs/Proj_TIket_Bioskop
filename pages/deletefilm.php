<?php
require_once('./class/class.film.php');

if (isset($_GET['filmid'])) {
    $objFilm = new Film();
    $objFilm->filmid = $_GET['filmid'];
    $objFilm->DeleteFilm();
    echo "<script> alert('$objFilm->message'); </script>";
    echo "<script>window.location = '?p=filmlist'</script>";
} else {
    echo '<script>window.history.back()</script>';
}
?>