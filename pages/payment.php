<!DOCTYPE html>
<html lang="en">

<head>
	<title>Beli Tiket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container mt-5 mb-5">
        <h3 class="mb-5">Beli Tiket</h3>
        <div class="row">
            <div class="col-2 mb-3">
                <img src="../img/avatar.jpg" class="card-img-top" style="border-radius: 10px;" alt="">
            </div>
            <div class="col-4">
                <h5 class="mb-3">Avatar (2009)</h5>
                <p>Fiksi Ilmiah, Laga - 162m</p>
                <hr>
                <p style="color: #D9D9D9;">Keterangan</p>
                <p>Durasi sewa akan dimulai dari waktu rilis film hingga 72 jam setelahnya & bisa ditonton berkali-kali selama durasi sewa berjalan.</p>
                
                <div class="mt-3">
                    <input type="text" class="form-control rounded-5" style="width: 310px; float: left;" placeholder="Masukkan Kode Promo">
                    <button class="btn btn-dark ms-md-2 rounded-5" style="width: 90px; background-color: #113250;">Klaim</button>
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
        
            
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Beli Tiket
        </button>

        <!-- Modal -->
        <div class="modal fade-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Beli Tiket</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Lanjut</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    
</body>