<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bioskop Online | Login</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<div class="container py-5 justify-content-center rounded-5" id="inputlogin">
		<div class="row">
			<div class="col align-self-center">
				<h1 class="title pb-5 text-center"><strong>LOGIN</strong></h1>
				<form action="" class="row g-3 justify-content-center" method="POST">
					<div class="col-md-10">
						<input type="email" class="form-control mt-2 form-control-lg rounded-pill" placeholder="E-mail" name="email" required>
					</div>
					<div class="col-md-10">
						<input type="password" class="form-control mt-2 form-control-lg rounded-pill" placeholder="Password" name="password"><br>
						<a href="index.php?p=lupapassword" style="color: #4285F4">Lupa Password?</a>
					</div>
					<div class="col-md-6 d-grid">
						<button class="btn btn-primary rounded-pill btn-lg" name="btnLogin" type="submit" value="Login">Login</button>
						<p>Belum punya akun? <a href="register.php" style="color: #4285F4">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</body>

</html>