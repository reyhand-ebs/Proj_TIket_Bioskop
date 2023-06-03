<?php
require_once "authorization_admin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>User List | Admin Bioskop 165</title>
</head>

<body>
	<div class="mt-5 mb-5 px-1">
		<h4 class="mb-4">Daftar Genre</h4>
        <a href="?p=addgenre"><button class="btn btn-primary btn-md rounded-pill" style="width: 130px;">+
                Tambah</button></a>
		<div class="mt-4">
			<table class="table table-bordered text-center" style="vertical-align: middle;">
				<thead>
					<tr>
						<th scope="col" class="col-1">Genre ID</th>
						<th scope="col" class="col-4">Nama Genre</th>
						<th scope="col" class="col-2">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						require_once('./class/class.genre.php');
						$objgenre = new Genre();
						$arrayResult = $objgenre->SelectAllGenre();

						if (count($arrayResult) == 0) {
							echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							foreach ($arrayResult as $datagenre) {
								echo '<tr>';
								echo '<td>' . $datagenre->genreid . '</td>';
								echo '<td>' . $datagenre->nama_genre . '</td>';
								echo '<td><a class="btn btn-warning"  href="?p=editgenre&genreid=' . $datagenre->genreid . '">Edit</a> |
   					          <a class="btn btn-danger"  href="?p=deletegenre&genreid=' . $datagenre->genreid . '" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete</a></td>';
								echo '</tr>';
								$no++;
							}
						}
						?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>