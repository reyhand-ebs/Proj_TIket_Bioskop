<!DOCTYPE html>
<html lang="en">

<head>
	<title>Detail Film</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-6 mb-4">
                <iframe width="100%" height="310" src="https://www.youtube.com/embed/qDjF9Bkib28" style="border-radius: 10px;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <!--<img src="../img/dr cha.jpg" style="width: 100%; height: 500px; border-radius: 20px; filter: grayscale(100%);">-->
            </div>
            <div class="col-6">
                <h1>Doctor Cha (2023)</h1>
                <h6 class="mb-3">Komedi, Drama Keluarga - 8 episode</h6>
                <div class="mb-2">
                    <i class="bx bxs-star text-warning"></i>
                    <span style="font-size: 22px; color: white;">4.6</span>
                </div>
                <p class="mb-4" style="color: gold; font-weight: 600; font-size: 30px;">Rp 20.000</p>
                <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #FFFFFF; color: #113250; font-weight: 500; text-align: center; width: 130px;">+ Wishlist</button></a>
                <a href="payment.php"><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #113250; color: #FFFFFF; font-weight: 500; text-align: center; width: 130px;">Beli Tiket</button></a>
            </div>
        </div>
        <div class="row">
            <hr style="color: #30689C; border-width: 4px; margin-top: 20px;">
            <p>Doctor Cha merupakan drama Korea rilisan JTBC yang memiliki judul resmi Doctor Lee Jung Sook. Serial ini bercerita tentang wanita yang awalnya berprofesi sebagai Ibu Rumah Tangga. Wanita bernama Cha Jung Sook yang diperankan oleh aktris senior Uhm Jung Hwa. Dirinya beradu peran dengan Kim Byung Chul, Myung Se Bin dan Min Wook Hyuk. Drama ini mengangkat tentang kehidupan seorang Ibu yang terpaksa berhenti berkarier dan fokus mengurus urusan rumah tangga. Termasuk merawat rumah, memastikan kebutuhan suami dan anak-anak terpenuhi, hingga melayani mertua.</p>
            
            <div class="col-1">
                <p style="color: #D9D9D9;">Pemeran </p>
            </div>
            <div class="col-11">
                <p>: Uhm Jung-hwa, Min Woo Hyuk, Kim Byung Chul </p>
            </div>
            <div class="col-1">
                <p style="color: #D9D9D9;">Sutradara </p>
            </div>
            <div class="col-11">
                <p>: Lee Kyung-sik</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Ulasan</h2>
        <hr style="color: #30689C; border-width: 4px; margin-top: 20px;">

        <div class="row">
            <div id="star-rating">
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="1">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="2">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="3">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="4">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="5">&#9733;</span>
            </div>
            <p id="selected-rating"></p>
            <script src="../js/script.js"></script>
            <style>
                .star:hover, .star.active {
                    color: gold !important;
                }
            </style>
        </div>
        
        <div class="row mb-4">
            <div class="col">
                <textarea rows="4" style="width: 100%; color: #1F1F1F; border-radius: 10px;" placeholder="Tulis ulasan..."></textarea>
                <div class="mt-2 mb-4 text-right">
                    <a href=""><button class="btn btn-lg rounded-pill" style="color: #FFFFFF; font-weight: 400; font-size: 15px;">Batal</button></a>
                    <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #113250; color: #FFFFFF; font-weight: 400; font-size: 15px;">Kirim</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1 mr-2">
                <div class="rounded-circle">
                    <img src="../img/profile.png" style="width: 70px;" alt="Gambar">
                </div>
            </div>
            <div class="col-11">
                <h5>Chiekal Mulia</h5>
                <i class='bx bxs-star text-warning' ></i>
                <span style="font-size: 18px; color: white;">5</span>
                <p class="mt-2">"Keren film nyee..."</p>
            </div>
        </div>
        <hr color="grey">
        <div class="row">
            <div class="col-1">
                <div class="rounded-circle">
                    <img src="../img/profile.png" style="width: 70px;" alt="Gambar">
                </div>
            </div>
            <div class="col">
                <h5>Khaira Isyara</h5>
                <i class='bx bxs-star text-warning' ></i>
                <span style="font-size: 18px; color: white;">5</span>
                <p>"Keren film nyee..."</p>
            </div>
        </div>
        <hr color="grey">
        <div class="row">
            <div class="col-1">
                <div class="rounded-circle">
                    <img src="../img/profile.png" style="width: 70px;" alt="Gambar">
                </div>
            </div>
            <div class="col">
                <h5>Khaira Isyara</h5>
                <i class='bx bxs-star text-warning' ></i>
                <span style="font-size: 18px; color: white;">5</span>
                <p>"Keren film nyee..."</p>
            </div>
        </div>
        <hr color="grey">
        <div class="row">
            <div class="col-1">
                <div class="rounded-circle">
                    <img src="../img/profile.png" style="width: 70px;" alt="Gambar">
                </div>
            </div>
            <div class="col">
                <h5>Khaira Isyara</h5>
                <i class='bx bxs-star text-warning' ></i>
                <span style="font-size: 18px; color: white;">5</span>
                <p>"Keren film nyee..."</p>
            </div>
        </div>
    </div>
</body>
</html>