<?php
require_once "authorization_admin.php";
require_once('./class/class.aktor.php');

$objaktor = new Aktor();

if (isset($_POST['btnTambah'])) {
	$objaktor->aktorid = $_POST['aktorid'];
	$objaktor->nama_aktor = $_POST['nama_aktor'];
    $objaktor->nama_aktor = $_POST['nama_aktor'];
	$objaktor->AddAktor();
	if ($objuser->hasil) {
		echo "<script> alert('" . $objaktor->message . "'); </script>";
		echo '<script> window.location = "?p=aktorlist";</script>';
	} else {
		echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Aktor | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <h3 class="mb-5">Ubah Aktor</h3>
        <form class="mb-5" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="aktorid">ID Aktor</label>
						<?php
						$maxAktorID = $objaktor->getMaxAktorID(); // Mengambil UserID terbesar dari tabel pengguna (user)
						$nextAktorID = $maxAktorID + 1; // Mendapatkan UserID selanjutnya
						echo '<input name="aktorid" type="text" class="form-control" id="aktorid" value="' . $nextAktorID . '"
						disabled>';
						?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="nama_aktor">Nama</label>
                        <input type="text" class="form-control" id="nama_aktor">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="foto_aktor">Foto Aktor</label></br>
                        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" id="foto_aktor" name="foto_aktor">
                            <!--<input class="btn btn-dark btn-lg rounded-pill" type="submit" value="Unggah" style="background-color: #FFFFFF; color: #113250; font-weight: 400; font-size: 15px; text-align: center; width: 100px;">-->
                        </form>
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