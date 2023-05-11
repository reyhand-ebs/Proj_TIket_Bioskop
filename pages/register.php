<!DOCTYPE html>
<html lang="en">

<head>
	<title>bioskop online | Register</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
						<p>Sudah punya akun? <a href="login.php" style="color: #4285F4">Login</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>