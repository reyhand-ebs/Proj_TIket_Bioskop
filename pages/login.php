<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bioskop Online | Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <h1 class="text-center">Masuk</h1>
        <form>
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password">
            </div>
            <a href="index.php?p=lupapassword" style="color: #70AFE9">Lupa Password?</a></br></br></br>
            
            <div class="button-container">
                <input class="btn rounded-pill" type="submit" value="Masuk"></br>
            </div>
            <p class="text-center">Belum punya akun? <a href="register.php" style="color: #70AFE9">Daftar</a></p>
        </form>
    </div>

    <!--
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
-->
</body>

</html>