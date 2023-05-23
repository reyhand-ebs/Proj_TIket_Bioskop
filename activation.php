<?php
include('./inc.koneksi.php');
require_once('./class/class.user.php');

if (isset($_POST['btnSubmit'])) {
    $password = $_POST["newpass"];
    $repassword = $_POST["renewpass"];

    $objUser = new User();
    $objUser->ValidateTokenNew($_GET['t']);
    if ($objUser->hasil) {
        if (strlen($password) < 8) {
            echo "<script>alert('Password harus terdiri dari minimal 8 karakter');</script>";
        } else if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
            echo "<script>alert('Password hanya boleh terdiri dari huruf abjad dan angka');</script>";
        } else if ($password == strtolower($password)) {
            echo "<script>alert('Password harus mengandung huruf kapital');</script>";
        } else if ($password != $repassword) {
            echo "<script>alert('Kata sandi tidak sama');</script>";
        } else {
            $objUser->password = password_hash($password, PASSWORD_DEFAULT);
            $objUser->UpdateUser();
            echo "<script> alert('Password berhasil diubah, silahkan masuk kembali ke akun anda'); </script>";
            echo '<script> window.location="index.php?p=login"; </script>';
        }
    } else {
        //data tidak ditemukan
        echo '<div class="alert alert-warning">Invalid Token!</div>';
    }
} 
?>