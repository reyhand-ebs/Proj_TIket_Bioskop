<?php
require_once "authorization_admin.php";
require_once('./class/class.genre.php');

$objgenre = new Genre();

if (isset($_POST['btnTambah'])) {
	$objgenre->genreid = $_POST['genreid'];
	$objgenre->nama_genre = $_POST['nama_genre'];
	$objgenre->AddGenre();
	if ($objuser->hasil) {
		echo "<script> alert('" . $objgenre->message . "'); </script>";
		echo '<script> window.location = "?p=genrelist";</script>';
	} else {
		echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tambah Genre</title>
</head>

<body>
	<div class="mt-5 mb-5 px-5">
		<h3 class="mb-5">Tambah Genre</h3>
		<form class="mb-5" method="POST">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="genreid">ID Genre</label>
						<?php
						$maxGenreID = $objgenre->getMaxGenreID();
						$nextGenreID = $maxGenreID + 1;
						echo '<input name="genreid" type="text" class="form-control" id="genreid" value="' . $nextGenreID . '"
						readonly>';
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="nama_genre">Nama Genre</label>
						<input name="nama_genre" type="text" class="form-control" id="nama_genre"
							value="">
					</div>
				</div>
			</div>
			<div class="text-right pt-3">
				<button class="btn btn-lg rounded-pill btn-primary fw-semibold" style="width: 130px;" name="btnTambah"
					type="submit">Tambah</button>
			</div>
		</form>
	</div>
</body>

</html>