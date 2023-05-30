<?php
require_once "authorization_admin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Daftar Film | Admin Bioskop 165</title>
</head>

<body>
	<div class="mt-5 mb-5 px-1">
		<h4 class="mb-4">Daftar Film</h4>
        <a href="?p=addfilm"><button class="btn btn-primary btn-md rounded-pill" style="width: 130px;">+
                Tambah</button></a>

		<div class="mt-4">
			<table class="table table-bordered text-center" style="vertical-align: middle;">
				<thead>
					<tr>
						<th scope="col" class="col-1">Film ID</th>
						<th scope="col" class="col-1">Poster Film</th>
						<th scope="col" class="col-2">Judul Film</th>
						<th scope="col" class="col-2">Detail Film</th>
						<th scope="col" class="col-2">Rilis film</th>
						<th scope="col" class="col-1">Rating</th>
						<th scope="col" class="col-2">Director</th>
						<th scope="col" class="col-2">Writer</th>
						<th scope="col" class="col-1">Durasi</th>
						<th scope="col" class="col-1">File Film</th>
						<th scope="col" class="col-1">Tanggal Upload</th>
						<th scope="col" class="col-1">Aktor</th>
						<th scope="col" class="col-1">Genre</th>
						<th scope="col" class="col-2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					require_once('./class/class.film.php');
					$objFilm = new Film();
					$arrayResult = $objFilm->SelectAllFilmAktorGenre();


					if (count($arrayResult) == 0) {
						echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
					} else {
						$no = 1;
						foreach ($arrayResult as $dataFilm) {
							echo '<tr>';
							//if($dataEmp->photo != null)
							//echo '<td><img class="img-responsive" src="upload/'.$dataEmployee->photo.'" width="20" height="30"></td>';
							//else
							//echo '<td><img class="img-responsive" src="upload/default.png" width="20" height="30"></td>';
							echo '<td>' . $dataFilm->filmid . '</td>';
							echo '<td><img src="./img/' . $dataFilm->poster_film . '" alt="' . $dataFilm->poster_film . '" style="width:50px;"></td>';
							echo '<td>' . $dataFilm->judul_film . '</td>';
							echo '<td>' . substr($dataFilm->detail_film, 0, 20) . '...</td>';
							echo '<td>' . $dataFilm->rilis_film . ' </td>';
							echo '<td>' . $dataFilm->rating_film . '</td>';
							echo '<td>' . $dataFilm->director_film . ' </td>';
							echo '<td>' . $dataFilm->writer_film . '</td>';
							echo '<td>' . $dataFilm->durasi_film . '</td>';
							echo '<td>' . $dataFilm->file_film . '</td>';
							echo '<td>' . $dataFilm->tanggal_upload . '</td>';
							echo '<td>' . $dataFilm->nama_aktor . '</td>';
							echo '<td>' . $dataFilm->nama_genre . '</td>';
							echo '<td width="10%"><a class="btn btn-warning btn-sm"  href="dashboardadmin.php?p=editfilm&filmid=' . $dataFilm->filmid . '"><span class="glyphicon glyphicon-edit">Edit</span></a> </br>
   					          <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deletefilm&filmid=' . $dataFilm->filmid . '" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')"> <span class="glyphicon glyphicon-remove">Delete</span></a>
							  </td>';
							echo '</tr>';
							$no++;
						}
					}
					?>
				</tbody>
			</table>
		</div>

	</div>
</body>

</html>