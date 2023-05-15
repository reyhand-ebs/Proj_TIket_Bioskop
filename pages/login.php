<?php
include('./inc.koneksi.php');
require_once('./class/class.user.php');

if (isset($_POST['btnLogin'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$objUser = new User();
	$objUser->ValidateEmail($email);

	if ($objUser->hasil) {

		$ismatch = password_verify($password, $objUser->password);

		if ($ismatch) {
			if (!isset($_SESSION)) {
				session_start();
			}

			$_SESSION["userid"] = $objUser->userid;
			$_SESSION["email"] = $objUser->email;
			$_SESSION["name"] = $objUser->name;
			$_SESSION["idrole"] = $objUser->idrole;

			echo "<script>alert('Login sukses');</script>";

			if ($objUser->idrole == 'role1') {
				echo '<script>window.location = "dashboardadmin.php";</script>';
			} else if ($objUser->idrole == 'role2') {
				echo '<script>window.location = "dashboardmember.php";</script>';
			}
		} else {
			echo "<script>alert('Password tidak match');</script>";
		}
	} else {
		echo "<script>alert('Email tidak terdaftar');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Masuk | Bioskop 165</title>
</head>

<body>
	<div class="container py-5 justify-content-center rounded-5" id="inputlogin">
		<div class="row">
			<div class="col align-self-center">
				<h1 class="title pb-5 text-center"><strong>Masuk</strong></h1>
				<form action="" class="row g-3 justify-content-center" method="POST">
					<div class="col-md-10">
						<input type="email" class="form-control mt-2 form-control-lg rounded-pill" placeholder="E-mail" name="email" required>
					</div>
					<div class="col-md-10">
						<input type="password" class="form-control mt-2 form-control-lg rounded-pill" placeholder="Password" name="password">
						<a href="index.php?p=lupapassword" style="color: #4285F4" class="mx-4">Lupa Password?</a>
					</div>
					<div class="col-md-6 d-grid">
						<button class="btn btn-primary rounded-pill btn-lg" name="btnLogin" type="submit" value="Login">Masuk</button>
						<p>Belum punya akun? <a href="index.php?p=register" style="color: #4285F4">Daftar</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>