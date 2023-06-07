<!DOCTYPE html>
<html lang="en">

<head>
	<title>Beli Tiket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    .payment-dropdown {
      position: relative;
      display: inline-block;
    }

    .payment-dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 200px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      padding: 12px;
      z-index: 1;
    }

    .payment-dropdown:hover .payment-dropdown-content {
      display: block;
    }

    .option {
      display: none;
    }
  </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h3 class="mb-5">Beli Tiket</h3>
        <div class="row">
            <div class="col-2 mb-3">
                <img src="img/avatar.jpg" class="card-img-top" style="border-radius: 10px;" alt="">
            </div>
            <div class="col-4">
                <h5 class="mb-3">Avatar (2009)</h5>
                <p>Fiksi Ilmiah, Laga - 162m</p>
                <hr>
                <p style="color: #D9D9D9;">Keterangan</p>
                <p>Durasi sewa akan dimulai dari waktu rilis film hingga 72 jam setelahnya & bisa ditonton berkali-kali selama durasi sewa berjalan.</p>
                
                <div class="mt-3">
                    <input type="text" class="form-control rounded-5" style="width: 310px; float: left;" placeholder="Masukkan Kode Promo">
                    <br><br>
                    <button class="btn btn-dark ms-md rounded-5" style="width: 90px; background-color: #113250;">Klaim</button>
                </div>
            </div>
            
            <div class="col-5 border rounded" style="height:100%">
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
                        
                    <!--<div class="payment-dropdown mt-5 mb-5">
                        <button class="btn btn-primary">Pilih Metode Pembayaran</button>
                        <div class="payment-dropdown-content">
                            <a href="#">QRIS</a>
                            <a href="#">Bank Virtual Account</a>
                        </div>
                    </div>-->

                    <hr class="border" color="white">
                    <h5 class="mt-5 mb-2">Pilih Metode Pembayaran</h5>
                    <div class="form-check mt-2 mb-2">
                        <input class="form-check-input" type="radio" name="option" id="option1" value="1" onchange="showOption(1)">
                        <label class="form-check-label" for="option1">
                        QRIS
                        </label>
                    </div>
                    <div class="form-check mt-2 mb-3">
                        <input class="form-check-input" type="radio" name="option" id="option2" value="2" onchange="showOption(2)">
                        <label class="form-check-label" for="option2">
                        Bank Virtual Account
                        </label>
                    </div>
                    
                    <div id="option1-content" class="option">
                        <p>Silahkan scan QR di bawah ini</p>
                        <img src="img/qr.png" style="border-radius: 10px; width: 300px;">
                    </div>
                    <div id="option2-content" class="option">
                        <p>No. Virtual Account</p>
                        <h5>728479214782479440</h5>
                        <p>1. Buka aplikasi perbankan atau situs web perbankan Anda.</br>
                           2. Login ke akun perbankan Anda menggunakan kredensial yang valid (nomor rekening, kata sandi, dll.).</br>
                           3. Pilih opsi "Transfer" atau "Pembayaran" di menu utama.</br>
                           4. Pilih jenis transfer yang sesuai, misalnya "Transfer ke Virtual Account" atau "Pembayaran Virtual Account".</br>
                           5. Masukkan nomor virtual account tujuan yang Anda ingin transfer.</p>
                    </div>

                    <a href=""><button class="btn btn-dark btn-lg rounded-pill mt-3" style="background-color: #113250; color: #FFFFFF; font-weight: 500; text-align: center; width: 100%;">Saya sudah membayar</button></a>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        function showOption(option) {
                        $('.option').hide();
                        $('#option' + option + '-content').show();
                        }
                    </script>
                    
                </div>
                
            </div>
        
    </div>
    </div>
    
</body>