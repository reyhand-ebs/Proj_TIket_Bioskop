<?php
if(!isset($_SESSION)){
 	session_start();
}

if(!isset($_SESSION["roleid"])){
	echo "<script> alert('Silakan login untuk mengakses halaman ini'); </script>";
	echo '<script> window.location="index.php"; </script>';
} else {
	if($_SESSION["roleid"]!='role1') {
		echo "<script> alert('Hanya admin yang dapat mengakses halaman ini'); </script>";
		echo '<script> window.location="index.php"; </script>';
	}
}
