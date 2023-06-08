<<<<<<< HEAD
=======
<?php
#require_once "authorization_member.php";
require_once "addpaymentproses.php";
require_once('./class/class.film.php');
require_once('./class/class.genre.php');

$objfilm = new Film();
$objfilm->filmid = $_GET['filmid'];
$objfilm->SelectOneFilm();

?>

>>>>>>> backend-coba2
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
	<title>Beli Tiket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
=======
    <title><?php echo $objfilm->judul_film; ?> | Beli Tiket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
>>>>>>> backend-coba2
</head>

<body>
    <div class="container mt-5 mb-5">
<<<<<<< HEAD
        <h3 class="mb-5">Beli Tiket</h3>
        <div class="row">
            <div class="col-2 mb-3">
                <img src="../img/dr_cha.jpg" class="card-img-top" style="border-radius: 10px;" alt="">
            </div>
            <div class="col-4">
                <h5 class="mb-3">Doctor Cha (2023)</h5>
                <p>Komedi, Drama Keluarga - 8 episode</p>
                <hr>
                <p style="color: #D9D9D9;">Keterangan</p>
                <p>Durasi sewa akan dimulai dari waktu rilis film hingga 72 jam setelahnya & bisa ditonton berkali-kali selama durasi sewa berjalan.</p>
                
                <div class="mt-3">
                    <input type="text" class="form-control rounded-5" style="width: 310px; float: left;" placeholder="Masukkan Kode Promo">
                    <br><br>
                    <button class="btn btn-dark ms-md rounded-5" style="width: 90px; background-color: #113250;">Klaim</button>
                </div>
            </div>
            
            <div class="col-6 border rounded">
                <div class="m-3 mt-4">
                    <h5 class="mb-3">Rincian</h5>

                    <div class="item" style="clear: both; padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; color: #D9D9D9;">No. Pesanan</div>
                        <div class="right" style="float: right; text-align: right; width: 40%;">B-230520221543</div>
                    </div>
                    <div class="item" style="clear: both; padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; color: #D9D9D9;">Harga Film</div>
                        <div class="right" style="float: right; text-align: right; width: 40%;">15.000</div>
                    </div>
                    <div class="item" style="clear: both; padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; color: #D9D9D9;">Biaya Admin</div>
                        <div class="right" style="float: right; text-align: right; width: 40%;">1.000</div>
                    </div>
                    <div class="item" style="clear: both; padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; color: #D9D9D9;">Diskon</div>
                        <div class="right" style="float: right; text-align: right; width: 40%;">-</div>
                    </div>
                    <hr class="border" color="white">
                    <div class="item-total" style="padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; font-weight: bolder; font-size: 20px; color: #D9D9D9;">Total Harga</div>
                        <div class="right" style="float: right; text-align: right; width: 40%; font-weight: bolder; font-size: 20px;">Rp 16.000</div>
                    </div>

                    <div class="dropdown">
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Pilih Metode Pembayaran</h6></li>
                            <li><a class="dropdown-item" href="#">QRIS</a></li>
                            <li><a class="dropdown-item" href="#">Bank Virtual Account</a></li>
                        </ul>
                    </div>

                </div>
                
            </div>
        
    </div>
    
</body>
=======
        <h3 class="mb-5" style="font-weight: bold;">Beli Tiket</h3>
        <div class="row">
            <div class="col-2 mb-3">
            <img src="./img/<?php echo $objfilm->poster_film; ?>" alt="<?php echo $objfilm->poster_film; ?>"
                class="card-img-top" style="border-radius: 10px;">
            </div>
            <div class="col-4">
                <h4 class="mb-3"><?php echo $objfilm->judul_film; ?></h4>
                <p><?php echo implode (', ',$objfilm->nama_genre); ?> - <?php echo $objfilm->durasi_film; ?></p>
                <hr>
                <p style="color: gray;">Keterangan</p>
                <p>Durasi sewa akan dimulai dari waktu rilis film hingga 72 jam setelahnya & bisa ditonton berkali-kali
                    selama durasi sewa berjalan.</p>

                <div class="mt-3">
                    <input type="text" class="form-control rounded-5" style="width: 310px; float: left;"
                        placeholder="Masukkan Kode Promo">
                    <button class="btn btn-dark ms-md-2 rounded-5"
                        style="width: 90px; background-color: #113250;">Klaim</button>
                </div>
            </div>

            <div class="col-6 border rounded" style="height: 850px;">
                <div class="m-3 mt-4">
                    <h5 class="mb-3">Rincian</h5>

                    <?php
                    $no_pesanan = "B-230520221543";
                    $harga_film = $objfilm->harga_film;
                    $biaya_admin = "2000";
                    $harga_total = $harga_film + $biaya_admin;
                    ?>

                    <div class="item" style="clear: both; padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; color: gray;">No.
                            Pesanan</div>
                        <div class="right" style="float: right; text-align: right; width: 40%;"><?php echo $no_pesanan; ?>
                        </div>
                    </div>
                    <div class="item" style="clear: both; padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; color: gray;">Harga
                            Film</div>
                        <div class="right" style="float: right; text-align: right; width: 40%;"><?php echo $harga_film; ?>
                        </div>
                    </div>
                    <div class="item" style="clear: both; padding: 5px 0;">
                        <div class="left" style="float: left; text-align: left; width: 60%; color: gray;">Biaya
                            Admin</div>
                        <div class="right" style="float: right; text-align: right; width: 40%;"><?php echo $biaya_admin; ?>
                        </div>
                    </div>
                    <hr class="border" color="white">
                    <div class="item-total" style="padding: 5px 0;">
                        <div class="left"
                            style="float: left; text-align: left; width: 60%; font-weight: bolder; font-size: 20px; color: gray;">
                            Total Harga</div>
                        <div class="right"
                            style="float: right; text-align: right; width: 40%; font-weight: bolder; font-size: 20px;">Rp
                            <?php echo $harga_total; ?></div>
                    </div>

                    <hr class="border" color="white">
                    <h5 class="mt-5 mb-2">Pilih Metode Pembayaran</h5>
                    <div class="form-check mt-2 mb-2">
                        <input class="form-check-input" type="radio" name="option" id="option1" value="1"
                            onchange="showOption(1)">
                        <label class="form-check-label" for="option1">
                            QRIS
                        </label>
                    </div>
                    <div class="form-check mt-2 mb-3">
                        <input class="form-check-input" type="radio" name="option" id="option2" value="2"
                            onchange="showOption(2)">
                        <label class="form-check-label" for="option2">
                            Bank Virtual Account
                        </label>
                    </div>

                    <div id="option1-content" class="option">
                        <p>Silahkan scan QR di bawah ini</p>
                        <img src="./img/qr.png" style="border-radius: 10px; width: 300px;">
                    </div>
                    <div id="option2-content" class="option">
                        <p>No. Virtual Account</p>
                        <h5>728479214782479440</h5>
                        <p>1. Buka aplikasi perbankan atau situs web perbankan Anda.<br>
                            2. Login ke akun perbankan Anda menggunakan kredensial yang valid (nomor rekening, kata
                            sandi, dll.).<br>
                            3. Pilih opsi "Transfer" atau "Pembayaran" di menu utama.<br>
                            4. Pilih jenis transfer yang sesuai, misalnya "Transfer ke Virtual Account" atau "Pembayaran
                            Virtual Account".<br>
                            5. Masukkan nomor virtual account tujuan yang Anda ingin transfer.</p>
                    </div>

                    <a href=""><button class="btn btn-dark btn-lg rounded-pill mt-3"
                            style="background-color: #113250; color: #FFFFFF; font-weight: 500; text-align: center; width: 100%;"
                            name="btnBayar" type="submit">Bayar</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showOption(option) {
            var option1Content = document.getElementById("option1-content");
            var option2Content = document.getElementById("option2-content");

            if (option === 1) {
                option1Content.style.display = "block";
                option2Content.style.display = "none";
            } else if (option === 2) {
                option1Content.style.display = "none";
                option2Content.style.display = "block";
            }
        }
    </script>
</body>

</html>
>>>>>>> backend-coba2
