<?php
require_once('./class/class.payment.php');
require_once('./class/class.user.php');
require_once('./class/class.film.php');
#require_once('./class/class.voucher.php')

$objpayment = new Payment();
$objuser = new User();
//$objuser->SelectOneUser();
$objfilm = new Film();
//$objfilm->SelectOneFilm();

if (isset($_POST['btnBayar'])) {
    $objpayment->paymentid = $_POST['paymentid'];
    //$objuser->userid = $_POST['userid'];
    //$objfilm->filmid = $_POST['filmid'];
    
    // Assuming the file upload is handled elsewhere and the relevant variables are available
    //$temp_file = $_FILES['file']['tmp_name'];
    //$target_file = "./img/" . $_FILES['file']['name'];
    $no_pesanan = $_POST['no_pesanan'];
    $biaya_admin = $_POST['biaya_admin'];

    if (move_uploaded_file($temp_file, $target_file)) {
        $objpayment->poster_film = $target_file;
        $objpayment->no_pesanan = $no_pesanan;
        $objpayment->biaya_admin = $biaya_admin;
        $objpayment->judul_film = $_POST['judul_film'];
        $objpayment->harga_film = $_POST['harga_film'];
        $objpayment->total_harga = $_POST['total_harga'];
    } else {
        echo "<script> alert('Proses gagal 1. Silakan ulangi'); </script>";
    }
} 
?>





