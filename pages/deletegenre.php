<?php
require_once('./class/class.genre.php');

if (isset($_GET['genreid'])) {
    $objGenre = new Genre();
    $objGenre->genreid = $_GET['genreid'];
    $objGenre->DeleteGenre();
    echo "<script> alert('$objGenre->message'); </script>";
    echo "<script>window.location = '?p=genrelist'</script>";
} else {
    echo '<script>window.history.back()</script>';
}
?>