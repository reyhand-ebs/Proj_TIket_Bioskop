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
<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-0 px-2" style="background-color: rgb(29, 34, 40)">
        <div class="container-fluid">
            <a href="index.php?p=home" class="navbar-brand"><img src="../img/bioskop online.png" alt="" class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php?p=home" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=explore" class="nav-link text-white">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=contact" class="nav-link text-white">Contact</a>
                    </li>
                </ul>
            </div>-->
            <a href="register.php"><button class="btn btn-lg btn-dark ms-md-3 rounded-3 " style="background-color: rgb(251, 129, 34)">Register</button></a>
        </div>
    </nav>
	<div class="container py-5">
		<div class="col-md-6">
			<h1 class="title pb-5"><strong>REGISTER</strong></h1>
			<form action="" class="row g-3 justify-content-center" method="POST">
				<div class="col-md-10">
					<label for="name">Name: </label>
					<input type="name" class="form-control mt-2" placeholder="Enter Name" name="name" required>
				</div>
				<div class="col-md-10">
					<label for="email">Email: </label>
					<input type="email" class="form-control mt-2" placeholder="Enter E-mail" name="email" required>
				</div>
				<div class="col-md-10">
					<label for="nohp">No. Handphone: </label>
					<input type="text" class="form-control mt-2" placeholder="Enter No. Handphone" name="nohp" required>
				</div>
				<div class="col-md-10">
					<label for="password">Password: </label>
					<input type="password" class="form-control mt-2" placeholder="Password" name="password">
				</div>
				<div class="col-md-10">
					<label for="password">Retype Password: </label>
					<input type="password" class="form-control mt-2" placeholder="Password" name="password"></br>
					<p>Sudah punya akun? <a href="login.php" style="color: #4285F4">Login</a></p>
				</div>
				<div class="col-md-3 d-grid">
					<button class="btn btn-dark" style="background-color: rgb(29, 34, 40)" name="btnRegister" type="submit" value="Register">Register</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>