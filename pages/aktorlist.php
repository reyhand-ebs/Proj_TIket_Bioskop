<?php
require_once "authorization_admin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Aktor List | Admin Bioskop 165</title>
</head>

<body>
	<div class="mt-5 mb-5 px-1">
		<h4 class="mb-4">Daftar Aktor</h4>
        <a href="?p=addaktor"><button class="btn btn-primary btn-md rounded-pill" style="width: 130px;">+
                Tambah</button></a>
		<div class="mt-4">
			<table class="table table-bordered text-center" style="vertical-align: middle;">
				<thead>
					<tr>
						<th scope="col" class="col-1">Aktor ID</th>
                        <th scope="col" class="col-3">Foto Aktor</th>
						<th scope="col" class="col-5">Nama Aktor</th>
						<th scope="col" class="col-2">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						require_once('./class/class.aktor.php');
						$objaktor = new Aktor();
						$arrayResult = $objaktor->SelectAllAktor();

						if (count($arrayResult) == 0) {
							echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							foreach ($arrayResult as $dataaktor) {
								echo '<tr>';
								echo '<td>' . $dataaktor->aktorid . '</td>';
                                echo '<td><img src="./img/' . $dataaktor->foto_aktor . '" alt="' . $dataaktor->foto_aktor . '" style="width:100px;"></td>';
								echo '<td>' . $dataaktor->nama_aktor . '</td>';
								echo '<td><a class="btn btn-warning"  href="?p=editaktor&aktorid=' . $dataaktor->aktorid . '">Edit</a> |
   					          <a class="btn btn-danger"  href="?p=deleteaktor&aktorid=' . $dataaktor->aktorid . '" 
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