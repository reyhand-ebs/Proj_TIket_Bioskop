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
<!--header-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: rgb(29, 34, 40)">
    <div class="container-fluid">
        <a href="../index.php"><img src="../img/bioskop online.png" width="170"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Film Saya</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Genre
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Adventure</a></li>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Comedy</a></li>
                <li><a class="dropdown-item" href="#">Crime</a></li>
                <li><a class="dropdown-item" href="#">Drama</a></li>
                <li><a class="dropdown-item" href="#">Horror</a></li>
                <li><a class="dropdown-item" href="#">Thriller</a></li>
                <li><a class="dropdown-item" href="#">Romance</a></li>
            </ul>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2 rounded-4" type="search" placeholder="Cari film atau orang.." aria-label="Search">
            <button class="btn btn-outline-success rounded-4" type="submit">Cari</button>
        </form>
        </div>
        <a href="../pages/login.php"><button class="btn btn-dark ms-md-3 rounded-4" style="background-color: #C70039;">Masuk</button></a>
    </div>
    </nav>
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