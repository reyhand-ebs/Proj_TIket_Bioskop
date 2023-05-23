<?php
require_once('pages/authorization_admin.php');
require "inc.koneksi.php";
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

</head>

<body>
	<nav class="navbar navbar-expand-lg bg-dark sticky-top py-0 px-2">
        <div class="container-fluid">
            <a href="index.php?p=home" class="navbar-brand"><img src="./img/bioskop online.png" alt="logo bioskop"
                    class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fs-6">
                    <li class="nav-item"><a href="dashboardadmin.php?p=home" class="nav-link text-white">Beranda</a></li>
					<li class="nav-item"><a href="dashboardadmin.php?p=filmlist" class="nav-link text-white">Film List</a></li>
					<li class="nav-item"><a href="dashboardadmin.php?p=userlist" class="nav-link text-white">User List</a></li>
                </ul>
            </div>
            <form class="d-flex mx-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari Film atau Genre" aria-label="Search"
                    id="searchInput">
                <button class="btn btn-md btn-outline-success" type="submit">Cari</button>
            </form>
            <a href="index.php?p=register"><button class="btn btn-md btn-outline-primary ms-md-3 rounded-3">Daftar</button></a>
        </div>
    </nav>
	<div class="container">
		<div style="margin-bottom:10px">
			<?php
			echo "Welcome, <b>" . $_SESSION["name"] . "</b><br>";
			echo "Anda login sebagai, <b>" . $_SESSION["roleid"] . "</b>";
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
			include($pages_dir . '/sidebar.php');
		}
		?>

		<footer class="page-footer blue center-on-small-only">
			<div class="footer-copyright text-center rgba-black-light">
				<div class="container-fluid">
					© 2020 Copyright: <a href="https://www.esqbs.ac.id"> ESQ Business School </a>
				</div>
			</div>
		</footer>
	</div>
	<script>
		$(document).ready(function () {
			$('.table').DataTable();
		});
	</script>
</body>

</html>