<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Film</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container mt-5 mb-5">
        <h3 class="mb-5">Tambah/Ubah Film</h3>

        <form class="mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="filmid">ID Film</label>
                        <input type="number" class="form-control" id="filmid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="poster_film">Poster</label></br>
                        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" id="poster_film" name="poster_film">
                            <!--<input class="btn btn-dark btn-lg rounded-pill" type="submit" value="Unggah" style="background-color: #FFFFFF; color: #113250; font-weight: 400; font-size: 15px; text-align: center; width: 100px;">-->
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="judul_film">Judul</label>
                        <input type="text" class="form-control" id="judul_film">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="rilis_film">Tanggal Rilis</label>
                        <input type="date" class="form-control" id="rilis_film">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="durasi_film">Durasi</label>
                        <input type="text" class="form-control" id="durasi_film">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="rating_film">Rating</label>
                        <input type="text" class="form-control" id="rating_film">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="sutradara_film">Sutradara</label>
                        <input type="text" class="form-control" id="sutradara_film">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="penulis_film">Penulis</label>
                        <input type="text" class="form-control" id="penulis_film">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="aktor_film">Aktor</label>
                        <input type="text" class="form-control" id="aktor_film">
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
                        <label for="detail_film">Sinopsis</label>
                        <textarea type="text" class="form-control" id="detail_film"></textarea>
                    </div>
                </div>
            </div>

        </form>

        <div class="text-right">
            <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #E50913; font-weight: 500; text-align: center; width: 130px;">Batal</button></a>
            <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #113250; font-weight: 500; text-align: center; width: 130px;">Simpan</button></a>
        </div>
    
    </div>
        
</body>