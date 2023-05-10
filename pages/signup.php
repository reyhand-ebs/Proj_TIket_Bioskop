<?php
include('./inc.koneksi.php');
require_once('./class/class.user.php');
require_once('./class/class.mail.php');

if (isset($_POST['btnRegister'])) {
	$inputemail = $_POST["email"];
	$password = $_POST["password"];
	$retypepassword = $_POST["retypepassword"];
	$objUser = new User();
	$objUser->ValidateEmail($inputemail);
	$objUser->hasil = false;
	if ($objUser->hasil) {
		echo "<script>alert('Email sudah terdaftar'); </script>";
	} else {
		if ($password != $retypepassword) {
			echo "<script>alert('Password tidak match, silahkan cek kembali password anda'); </script>";
		} else {
			$objUser->email = $_POST["email"];
			$objUser->password = password_hash($password, PASSWORD_DEFAULT);
			//$objUser->password = password_hash($password, PASSWORD_DEFAULT);		
			$objUser->name = $_POST['name'];
			$objUser->nohp = $_POST['nohp'];
			$token=hash('sha256', md5(date('Y-m-d')));
			$objUser->token = $token;
			$objUser->AddUser();

			$subject = "Verifikasi Registrasi Email";
			$message = '<span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
					Silakan klik tautan berikut untuk mengkonfirmasi email anda:
					</span>
					<span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
						<a href="http://localhost/activation.php?t='.$token.'">http://localhost/activation.php?t='.$token.'</a>
					</span>';

			Mail::SendMail($objUser->email, $objUser->name, $subject, $message);
			
			echo "<script> alert('Registrasi berhasil, silahkan cek email anda'); </script>";
			echo '<script> window.location="index.php?p=login"; </script>';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tubirit | Sign Up</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<div class="container py-5 justify-content-center rounded-5" id="inputsignup">
		<div class="row">
			<div class="col align-self-center">
				<h1 class="title pb-5 text-center"><strong>Sign Up</strong></h1>
				<form action="" class="row g-3 justify-content-center" method="POST">
					<div class="col-md-10">
						<input type="email" class="form-control mt-2 form-control-lg rounded-pill" placeholder="E-mail"
							name="email" required>
					</div>
					<div class="col-md-10">
						<input type="text" class="form-control mt-2 form-control-lg rounded-pill" placeholder="Nama"
							name="name" required>
					</div>
					<div class="col-md-10">
						<input type="text" class="form-control mt-2 form-control-lg rounded-pill" placeholder="No HP"
							name="nohp" required>
					</div>
					<div class="col-md-10">
						<input type="password" class="form-control mt-2 form-control-lg rounded-pill"
							placeholder="Password" name="password" required><br>
						<input type="password" class="form-control form-control-lg rounded-pill"
							placeholder="Re-Type Password" name="retypepassword" required>
					</div>
					<div class="col-md-6 d-grid">
						<button class="btn btn-primary rounded-pill btn-lg" name="btnRegister" type="submit"
							value="Register">Register</button>
						<p>Sudah punya akun? <a href="index.php?p=login" style="color: #4285F4">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>