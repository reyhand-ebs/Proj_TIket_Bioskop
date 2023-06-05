<?php
require_once "authorization_admin.php";
require_once('./class/class.film.php');
$objFilm = new Film();
$objFilm->filmid = $_GET['filmid'];
$objFilm->SelectOneFilm();

if (isset($_POST['btnSimpan'])) {
    $judul_film = $_POST['judul_film'];
    $objFilm->judul_film = $judul_film;
    $objFilm->poster_film = $_POST['poster_film'];
    $objFilm->detail_film = $_POST['detail_film'];
    $objFilm->rilis_film = $_POST['rilis_film'];
    $objFilm->rating_film = $_POST['rating_film'];
    $objFilm->director_film = $_POST['director_film'];
    $objFilm->writer_film = $_POST['writer_film'];
    $objFilm->durasi_film = $_POST['durasi_film'];
    $objFilm->file_film = $_POST['file_film'];
    $objFilm->tanggal_upload = $_POST['tanggal_upload'];
    $objFilm->UpdateFilm();
    echo '<script>if(confirm("Apakah Anda yakin ingin menyimpan?")) { alert("Data film ' . $judul_film . ' berhasil diubah."); window.location.href = "?p=filmlist"; }</script>';
}

if (isset($_POST['btnBatal'])) {
    echo '<script>if(confirm("Apakah Anda yakin ingin membatalkan?")) { window.location.href = "?p=filmlist"; }</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Film | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <h3 class="mb-5">Ubah Film</h3>

        <form class="mb-5" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="filmid">ID Film
                            <hr>
                        </label>
                        <?php
                        echo '<input name="filmid" type="text" class="form-control" id="filmid" value="' . $objFilm->filmid . '"
						disabled>';
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="judul_film">Judul
                            <hr>
                        </label>
                        <input type="text" class="form-control" id="judul_film" name="judul_film"
                            value="<?php echo $objFilm->judul_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="rilis_film">Tanggal Rilis
                            <hr>
                        </label>
                        <input type="date" class="form-control" id="rilis_film" name="rilis_film"
                            value="<?php echo $objFilm->rilis_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="tanggal_upload">Tanggal Upload
                            <hr>
                        </label>
                        <?php date_default_timezone_set("Asia/Jakarta");
                        echo '<input type="text" class="form-control" id="tanggal_upload" name="tanggal_upload" value="' . $objFilm->tanggal_upload . '" readonly>';
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="durasi_film">Durasi
                            <hr>
                        </label>
                        <input type="text" class="form-control" id="durasi_film" name="durasi_film"
                            value="<?php echo $objFilm->durasi_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="rating_film">Rating
                            <hr>
                        </label>
                        <input type="text" class="form-control" id="rating_film" name="rating_film"
                            value="<?php echo $objFilm->rating_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="sutradara_film">Sutradara
                            <hr>
                        </label>
                        <input type="text" class="form-control" id="director_film" name="director_film"
                            value="<?php echo $objFilm->director_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="penulis_film">Penulis
                            <hr>
                        </label>
                        <input type="text" class="form-control" id="writer_film" name="writer_film"
                            value="<?php echo $objFilm->writer_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="nama-aktor">Aktor
                            <hr>
                        </label>
                        <input type="text" class="form-control" id="nama_aktor" name="nama_aktor"
                            value="<?php echo implode(', ', $objFilm->nama_aktor); ?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="nama_genre">Genre
                            <hr>
                        </label>
                        <input type="text" class="form-control" id="nama_genre" name="nama_genre"
                            value="<?php echo implode(', ', $objFilm->nama_genre); ?>" disabled>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-2">
                        <label for="detail_film">Sinopsis
                            <hr>
                        </label>
                        <textarea type="text" class="form-control" id="detail_film"
                            name="detail_film"><?php echo $objFilm->detail_film; ?></textarea>
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