<?php
require_once "authorization_admin.php";
require_once "addfilmproses.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tambah Film | Admin Bioskop 165</title>
</head>

<body>
	<div class="mt-5 mb-5 px-5">
		<h3 class="mb-5">Tambah Film</h3>
		<form class="mb-5" action="?p=addfilmproses" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="filmid">ID Film
							<hr>
						</label>
						<?php
						list($maxFilmID, $maxFilmName) = $objfilm->getMaxFilmID();
						$nextFilmID = $maxFilmID + 1;
						echo '<input name="filmid" type="text" class="form-control" id="filmid" value="' . $nextFilmID . '"
						readonly>';
						?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="judul_film">Judul
							<hr>
						</label>
						<input type="text" class="form-control" id="judul_film" name="judul_film">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="rilis_film">Tanggal Rilis
							<hr>
						</label>
						<input type="date" class="form-control" id="rilis_film" name="rilis_film">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="tanggal_upload">Tanggal Upload
							<hr>
						</label>
						<?php date_default_timezone_set("Asia/Jakarta");
						echo '<input type="text" class="form-control" id="tanggal_upload" name="tanggal_upload" value="'.date("d/m/Y").'" readonly>';
						?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="durasi_film">Durasi
							<hr>
						</label>
						<input type="text" class="form-control" id="durasi_film" name="durasi_film">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="rating_film">Rating
							<hr>
						</label>
						<input type="text" class="form-control" id="rating_film" name="rating_film">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="sutradara_film">Sutradara
							<hr>
						</label>
						<input type="text" class="form-control" id="director_film" name="director_film">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="penulis_film">Penulis
							<hr>
						</label>
						<input type="text" class="form-control" id="writer_film" name="writer_film">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group mb-2">
						<label for="detail_film">Sinopsis
							<hr>
						</label>
						<textarea type="text" class="form-control" id="detail_film" name="detail_film"></textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="poster_film">Poster
							<hr>
						</label></br>
						<input type="file" id="poster_film" name="poster_film">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mb-2">
						<label for="file_film">File Film
							<hr>
						</label></br>
						<input type="file" id="file_film" name="file_film">
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