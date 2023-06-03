<?php
require_once "authorization_admin.php";
require_once('./class/class.aktor.php');

$objaktor = new Aktor();

if (isset($_POST['btnTambah'])) {
    $objaktor->aktorid = $_POST['aktorid'];
    $objaktor->nama_aktor = $_POST['nama_aktor'];

    $foto_aktor = $_FILES['foto_aktor']['name'];
    $temp_file = $_FILES['foto_aktor']['tmp_name'];

    $target_dir = "./img/";
    $target_file = $target_dir . basename($foto_aktor);

    if (move_uploaded_file($temp_file, $target_file)) {
        $objaktor->foto_aktor = $foto_aktor;
        $objaktor->AddAktor();
        if ($objaktor->hasil) {
            echo "<script> alert('" . $objaktor->message . "'); </script>";
            echo '<script> window.location = "?p=aktorlist";</script>';
        } else {
            echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";
        }
    } else {
        echo "<script> alert('Gagal mengunggah foto. Silakan coba lagi'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Aktor | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <h3 class="mb-5">Tambah Aktor</h3>
        <form class="mb-5" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="aktorid">ID Aktor</label>
						<?php
						$maxAktorID = $objaktor->getMaxAktorID();
						$nextAktorID = $maxAktorID + 1;
						echo '<input name="aktorid" type="text" class="form-control" id="aktorid" value="'.$nextAktorID.'"
						readonly>';
						?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="nama_aktor">Nama</label>
                        <input type="text" class="form-control" id="nama_aktor" name="nama_aktor">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="foto_aktor">Foto Aktor</label></br>
                        <input type="file" id="foto_aktor" name="foto_aktor">
                    </div>
                </div>
            </div>
			<div class="text-right pt-3">
				<button class="btn btn-lg rounded-pill btn-primary fw-semibold" style="width: 130px;" name="btnTambah"type="submit">Tambah</button>
			</div>
        </form>
    </div>
</body>

</html>