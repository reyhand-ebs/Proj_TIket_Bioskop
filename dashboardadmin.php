<?php
include('./inc.koneksi.php');
require_once('./pages/authorization_admin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="./js/script.js"></script>
</head>

<body>
	<!-- NAVIGASI START -->
	<nav class="nav navbar navbar-expand-lg bg-dark sticky-top py-0 fw-medium fs-6">
		<div class="container-fluid">
			<a href="?p=beranda" class="navbar-brand"><img src="./img/bioskop online.png" alt="logo bioskop" class=""
					style="width: 160px; height: auto;"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="nav navbar-nav mx-5">
					<li class="nav-item px-2">
						<a href="?p=beranda" class="nav-link text-white">Beranda</a>
					</li>
					<li class="nav-item dropdown px-2">
						<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Genre
						</a>
						<ul class="dropdown-menu">
							<div class="overflow-y-scroll" style="max-height: 200px;">
								<?php
								require_once('./class/class.genre.php');
								$objGenre = new Genre();
								$arrayResult = $objGenre->SelectAllGenre();

								if (count($arrayResult) == 0) {
									echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
								} else {
									$no = 1;
									foreach ($arrayResult as $dataGenre) {
										echo '<li><a class="dropdown-item" href="?p=genre&nama_genre=' . $dataGenre->nama_genre . '">' . $dataGenre->nama_genre . '</a></li>';
										$no++;
									}
								}
								?>
							</div>
						</ul>
					</li>
					<li class="nav-item px-2">
						<a href="?p=userlist" class="nav-link text-white">User List</a>
					</li>
					<li class="nav-item px-2">
						<a href="?p=filmlist" class="nav-link text-white">Film List</a>
					</li>
					<li class="nav-item px-2">
						<a href="?p=genrelist" class="nav-link text-white">Genre List</a>
					</li>
					<li class="nav-item px-2">
						<a href="?p=aktorlist" class="nav-link text-white">Aktor List</a>
					</li>
					<li class="nav-item px-2">
						<a href="?p=profile" class="nav-link text-white">Profil List</a>
					</li>
					
				</ul>
			</div>
			<ul class="nav navbar-nav navbar-right sticky-end fs-6">
				<form class="d-flex me-5" role="search" style="">
					<input class="form-control me-2 rounded-4" type="search" placeholder="Cari Film atau Genre"
						aria-label="Search" id="searchInput">
					<button class="btn btn-md btn-primary rounded-4" type="button" onclick="search()"
						id="searchButton">Cari</button>
				</form>
				<a href="?p=keluar"><button class="btn btn-md btn-primary ms-md-3 rounded-4">Keluar</button></a>
			</ul>
		</div>
	</nav>
	<!-- NAVIGASI END -->
	<div class="container-fluid px-5 pt-5">
		<div style="margin-bottom:10px">
			<?php
			echo "<h3>Welcome, <b>" . $_SESSION["name"] . "</b></h3>";
			if ($_SESSION["roleid"] == 'role1') {
				echo "<h4>Anda login sebagai, <b>Admin</b></h4>";
			} elseif ($_SESSION["roleid"] == 'role2') {
				echo "<h4>Anda login sebagai, <b>Member</b></h4>";
			}
			?>
		</div>
		<?php
		$pages_dir = 'pages';
		if (!empty($_GET['p'])) {
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);

			$p = $_GET['p'];
			if (in_array($p . '.php', $pages)) {
				include($pages_dir . '/' . $p . '.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir . '/beranda.php');
		}
		?>
	</div>

	<!-- FOOTER START -->
	<footer class="bg-dark text-white pt-5">
		<div class="footer-top mt-20 container-fluid px-5">
			<div class="row gy-4">
				<div class="col-lg-4 col-md-3">
					<img class="logo w-75" src="./img/bioskop online.png" alt="">
				</div>
				<div class="col-lg-3 col-md-3">
					<h3 class="text-white fs-2">Halaman</h3>
					<ul class="list-unstyled">
						<li><a href="?p=beranda" style="color: #fff; text-decoration: none;">Beranda</a></li>
						<li><a href="?p=login" style="color: #fff; text-decoration: none;">Login</a></li>
						<li><a href="?p=signup" style="color: #fff; text-decoration: none;">Sign Up</a></li>
						<li><a href="?p=userlist" style="color: #fff; text-decoration: none;">User List</a></li>
						<li><a href="?p=userlist" style="color: #fff; text-decoration: none;">Film List</a></li>
						<li><a href="?p=userlist" style="color: #fff; text-decoration: none;">Genre List</a></li>
						<li><a href="?p=userlist" style="color: #fff; text-decoration: none;">Aktor List</a></li>
						<li><a href="?p=profile" style="color: #fff; text-decoration: none;">Profil List</a></li>
						

					</ul>
				</div>
				<div class="col-lg-5 col-md-5">
					<h3 class="text-white fs-2">Kontak Kami</h3>
					<ul class="list-unstyled">
						<li>Address: Menara 165, Jl. Tahi Bonar Simatupang, RT.3/RW.3, Cilandak Tim., Ps. Minggu, Kota
							Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12560</li>
						<br />
						<li>Email: damar.adji.s@students.esqbs.ac.id</li>
						<li>Email: refido.arjunal.a@students.esqbs.ac.id</li>
						<li>Email: mohamad.reyhand.f@students.esqbs.ac.id</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom py-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-10">
						<p class="mb-0">© 2022 copyright all right reserved | Designed with by Bioskop 165</p>
					</div>
					<div class="col-lg-5 col-md-2">
						<div class="social-icons">
							<a href="#"><i class='bx bxl-facebook'></i></a>
							<a href="#"><i class='bx bxl-twitter'></i></a>
							<a href="#"><i class='bx bxl-instagram-alt'></i></a>
						</div>
					</div>
				</div>
			</div>
	</footer>
	<!-- FOOTER END -->
</body>

</html>