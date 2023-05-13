<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bioskop 165 | Login</title>
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
						<input type="password" class="form-control mt-2 form-control-lg rounded-pill" placeholder="Password" name="password">
						<a href="index.php?p=lupapassword" style="color: #4285F4" class="mx-4">Lupa Password?</a>
					</div>
					<div class="col-md-6 d-grid">
						<button class="btn btn-primary rounded-pill btn-lg" name="btnLogin" type="submit" value="Login">Login</button>
						<p>Belum punya akun? <a href="index.php?p=register" style="color: #4285F4">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>