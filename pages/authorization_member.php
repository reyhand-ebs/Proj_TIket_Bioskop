<?php
if(!isset($_SESSION)){
 	session_start();
}

if(!isset($_SESSION["roleid"])){
	echo "<script> alert('Silakan Daftar dan Login untuk mengakses halaman ini'); </script>";
	echo '<script> window.location="index.php"; </script>';
} else {
	if($_SESSION["roleid"]!='role2') {
		echo "<script> alert('Hanya member yang dapat mengakses halaman ini'); </script>";
		echo '<script> window.location="index.php"; </script>';
	}
}
