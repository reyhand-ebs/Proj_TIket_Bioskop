<!DOCTYPE html>
<html>
<head>
  <title>Contoh Dropdown Metode Pembayaran</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
  </style>
</head>
<body>
  <div class="container">
    <h1>Pilih Metode Pembayaran</h1>
    
    <div class="payment-dropdown">
      <button class="btn btn-primary">Pilih Metode Pembayaran</button>
      <div class="payment-dropdown-content">
        <a href="#">Transfer Bank</a>
        <a href="#">Kartu Kredit</a>
        <a href="#">Dompet Digital</a>
      </div>
    </div>
    
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
