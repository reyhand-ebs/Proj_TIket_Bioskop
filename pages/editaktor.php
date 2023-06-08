<?php
require_once "authorization_admin.php";
require_once('./class/class.aktor.php');
$objAktor = new Aktor();
$objAktor->aktorid = $_GET['aktorid'];
$objAktor->SelectOneAktor();

if (isset($_POST['btnSimpan'])) {
    $nama_aktor = $_POST['nama_aktor'];
    $foto_aktor = $_POST['foto_aktor'];
    $objAktor->nama_aktor = $nama_aktor;
    $objAktor->foto_aktor = $foto_aktor;
    $objAktor->UpdateAktor();
    echo '<script>if(confirm("Apakah Anda yakin ingin menyimpan?")) { alert("Data aktor ' . $nama_aktor . ' berhasil diubah."); window.location.href = "?p=aktorlist"; }</script>';
}

if (isset($_POST['btnBatal'])) {
    echo '<script>if(confirm("Apakah Anda yakin ingin membatalkan?")) { window.location.href = "?p=aktorlist"; }</script>';
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
        <form class="mb-5" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="aktorid">ID Aktor</label>
                        <input type="text" class="form-control" id="aktorid" value="<?php echo $objAktor->aktorid; ?>"
                            disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="nama_aktor">Nama</label>
                        <input type="text" class="form-control" id="nama_aktor"
                            value="<?php echo $objAktor->nama_aktor; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="foto_aktor">Foto Aktor</label></br>
                        <input type="file" id="foto_aktor" name="foto_aktor">
                        <!--<input class="btn btn-dark btn-lg rounded-pill" type="submit" value="Unggah" style="background-color: #FFFFFF; color: #113250; font-weight: 400; font-size: 15px; text-align: center; width: 100px;">-->
                    </div>
                </div>
            </div>
            <div class="text-right pt-3">
                <button class="btn btn-lg rounded-pill btn-danger fw-semibold" style="width: 130px;" name="btnBatal"
                    type="submit">Batal</button>
                <button class="btn btn-lg rounded-pill btn-primary fw-semibold" style="width: 130px;" name="btnSimpan"
                    type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>