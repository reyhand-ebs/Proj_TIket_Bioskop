<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bioskop Online | Daftar</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="register">
        <h1 class="text-center">Daftar</h1>
        <form>
            <div class="form-group">
                <label class="form-label" for="nama">Nama</label>
                <input class="form-control" type="nama" id="nama" placeholder="Nama">
            </div>
			<div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" placeholder="Email">
            </div>
			<div class="form-group">
                <label class="form-label" for="nohp">Nomor Telepon</label>
                <input class="form-control" type="nohp" id="nohp" placeholder="Nomor Telepon">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" placeholder="Password">
            </div>
			<div class="form-group">
                <label class="form-label" for="password">Konfirmasi Password</label>
                <input class="form-control" type="password" id="password" placeholder="Konfirmasi Password">
            </div>
            <div class="button-container">
                <input class="btn rounded-pill" type="submit" value="Daftar"></br>
            </div>
            <p class="text-center">Sudah punya akun? <a href="login.php" style="color: #70AFE9">Masuk</a></p>
        </form>
    </div>

<!--
<body>
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
	</div>-->
</body>

</html>