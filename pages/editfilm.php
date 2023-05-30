<?php
require_once "authorization_admin.php";
require_once('./class/class.film.php');
$objFilm = new Film();
$objFilm->filmid = $_GET['filmid'];
$objFilm->SelectOneFilm();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Film | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <h3 class="mb-5">Ubah Film</h3>

        <form class="mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="filmid">Film ID</label>
                        <input type="text" class="form-control" id="userid" value="<?php echo $objFilm->filmid; ?>"
                            disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="poster_film">Poster</label></br>
                        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" id="poster_film" name="poster_film" value="<?php echo $objFilm->poster_film; ?>">
                            <!--<input class="btn btn-dark btn-lg rounded-pill" type="submit" value="Unggah" style="background-color: #FFFFFF; color: #113250; font-weight: 400; font-size: 15px; text-align: center; width: 100px;">-->
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="judul_film">Judul</label>
                        <input type="text" class="form-control" id="judul_film" value="<?php echo $objFilm->judul_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="rilis_film">Tanggal Rilis</label>
                        <input type="date" class="form-control" id="rilis_film" value="<?php echo $objFilm->rilis_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="durasi_film">Durasi</label>
                        <input type="text" class="form-control" id="durasi_film" value="<?php echo $objFilm->durasi_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="rating_film">Rating</label>
                        <input type="text" class="form-control" id="rating_film" value="<?php echo $objFilm->rating_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="sutradara_film">Sutradara</label>
                        <input type="text" class="form-control" id="sutradara_film" value="<?php echo $objFilm->director_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="penulis_film">Penulis</label>
                        <input type="text" class="form-control" id="penulis_film" value="<?php echo $objFilm->writer_film; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="aktor_film">Aktor</label>
                        <input type="text" class="form-control" id="aktor_film" value="<?php echo $objFilm->nama_aktor; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="aktor_film">Aktor</label>
                        <input type="text" class="form-control" id="aktor_film" value="<?php echo $objFilm->nama_genre; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="tanggal_upload">Tanggal Upload</label>
                        <input type="date" class="form-control" id="tanggal_upload">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="detail_film">Detail Film</label>
                        <textarea type="text" class="form-control" style="height: 100px;" id="detail_film"><?php echo $objFilm->detail_film; ?></textarea>
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