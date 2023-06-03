<?php
require_once "authorization_admin.php";
require_once('./class/class.user.php');
$objGenre = new Genre();
$objGenre->genreid = $_GET['genreid'];
$objGenre->SelectOneGenre();

if (isset($_POST['btnSimpan'])) {
    $nama_genre = $_POST['nama_genre'];
    $objGenre->nama_genre = $nama_genre;
    $objGenre->UpdateGenre();
    echo '<script>if(confirm("Apakah Anda yakin ingin menyimpan?")) { alert("Data genre ' .$nama_genre. ' berhasil diubah."); window.location.href = "?p=genrelist"; }</script>';
}

if (isset($_POST['btnBatal'])) {
    echo '<script>if(confirm("Apakah Anda yakin ingin membatalkan?")) { window.location.href = "?p=genrelist"; }</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Genre | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <h3 class="mb-5">Ubah Genre</h3>
        <form class="mb-5" method="POST">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="genreid">ID Genre</label>
                        <input type="text" class="form-control" id="userid" value="<?php echo $objGenre->genreid; ?>"
                            disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="nama_genre">Nama Genre</label>
                        <input name="nama_genre" type="text" class="form-control" id="nama_genre"
                            value="<?php echo $objGenre->nama_genre;?>">
                    </div>
                </div>
            </div>
            <div class="text-right pt-5">
                <button class="btn btn-lg rounded-pill btn-danger fw-semibold" style="width: 130px;" name="btnBatal"
                    type="submit">Batal</button>
                <button class="btn btn-lg rounded-pill btn-primary fw-semibold" style="width: 130px;" name="btnSimpan"
                    type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>