<?php
require_once('./class/class.film.php');
$objFilm = new Film();
$objFilm->filmid = $_GET['filmid'];
$objFilm->SelectOneFilm();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $objFilm->judul_film; ?> | Bioskop 165</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <div class="row">
            <div class="col-6 mb-4">
                <iframe width="100%" height="310" src="<?php echo $objFilm->trailer_film; ?>" class="rounded-4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-6">
                <h1><?php echo $objFilm->judul_film; ?></h1>
                <h6 class="mb-3"><?php echo implode(', ', $objFilm->nama_genre); ?></h6>
                <div class="mb-2">
                    <i class="bx bxs-star text-warning fs-4"></i>
                    <span class="fs-4"><?php echo $objFilm->rating_film; ?></span>
                </div>
                <p class="mb-4" style="color: gold; font-weight: 600; font-size: 30px;">Rp. <?php echo number_format($objFilm->harga_film, 2, ',', '.'); ?></p>
                <a href=""><button class="btn btn-lg rounded-pill text-dark" style="border-color: #113250;">+
                        Wishlist</button></a>
                <a href="?p=payment&filmid=<?php echo $objFilm->filmid; ?>"><button class="btn btn-lg rounded-pill text-white"
                        style="background-color: #113250;" name="btnBeli" type="next">Beli Tiket</button></a>
            </div>
        </div>
        <div class="row pt-3">
            <hr class="border-5" style="color: #30689C;">
            <p><?php echo $objFilm->detail_film; ?></p>

            <div class="col-1">
                <p style="">Pemeran</p>
            </div>
            <div class="col-11">
                <p>: <?php echo implode(', ', $objFilm->nama_aktor); ?></p>
            </div>
            <div class="col-1">
                <!-- color: #D9D9D9; -->
                <p style="">Sutradara </p>
            </div>
            <div class="col-11">
                <p>: <?php echo $objFilm->director_film; ?></p>
            </div>
        </div>
        <div class="row pt-3">
            <h2>Ulasan</h2>
            <hr class="border-5" style="color: #30689C;">
            <div class="row">
                <!--
                <div id="star-rating">
                    <span class="star" style="font-size: 25px; color: gray; cursor: pointer;"
                        data-rating="1">&#9733;</span>
                    <span class="star" style="font-size: 25px; color: gray; cursor: pointer;"
                        data-rating="2">&#9733;</span>
                    <span class="star" style="font-size: 25px; color: gray; cursor: pointer;"
                        data-rating="3">&#9733;</span>
                    <span class="star" style="font-size: 25px; color: gray; cursor: pointer;"
                        data-rating="4">&#9733;</span>
                    <span class="star" style="font-size: 25px; color: gray; cursor: pointer;"
                        data-rating="5">&#9733;</span>
                </div>
                <p id="selected-rating"></p>
            </div> -->

            <?php
       require_once "./class/class.komentar.php";
       $objKomentar = new Komentar();
       if(isset($_POST['btnSubmit'])){	
        // $objfilm->id_film = $_POST['id_film']
        $objKomentar->nama = $_POST['nama'];
        $objKomentar->rating = $_POST['rating'];
        $objKomentar->deskripsi = $_POST['deskripsi'];	 
         //$objKomentar->rilis = $_POST['rilis'];	
         
              
         
         if(isset($_GET['id'])){		
             $objKomentar->id = $_GET['id'];
             $objKomentar->UpdateKomentar();
         }
         else{	
             $objKomentar->AddKomentar();
         }			
         
         echo "<script> alert('$objKomentar->message'); </script>";
         if($objKomentar->hasil){
             echo '<script> window.location = "dashboardmember.php?p=member_detail";</script>';
         }
                     
     }
     

       ?>






            <div class="row">
            <div class="col-md-4">
                <form method="POST" action="">
                    <div class="col">
                        <input type="text" name="nama" id="nama" placeholder="nama" style="width:100%;">
                    </div>
                    <br>
                    <div class="col">
                        <textarea name="deskripsi" rows="4" style="width: 300%; color: #1F1F1F; border-radius: 10px;" placeholder="Tulis ulasan..."></textarea>
                    </div>
                    <br>
                    <div class="rateyo" id="rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5"
                    data-ratayo-score="3">

                    </div>
                    <input type="hidden" name="rating">

                    <br>
                    <button type="submit" class="btn btn-primary" name="btnSubmit">Kirim</button>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <script>
            $(function () {
                $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                    var rating = data.rating;
                    $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                    $(this).parent().find('.result').text('rating :'+ rating);
                    $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
                });
            });
        </script>


<?php
         require_once "./class/class.komentar.php";
         $objKomentar = new Komentar();
         $arrayResult = $objKomentar->SelectAllKomentar();

         if(count($arrayResult) == 0){
            echo "-";
         }else{
            $no = 1;
            foreach($arrayResult as $datakomentar){
                echo '<span style="color: white;">' .$no. '</span>';
                echo '<hr color="grey">';
                echo '<div class="row">';
                echo '<div class="rounded-circle">';
                echo '<img src="./img/profile.png" style="width: 70px;" alt="Gambar">';
                echo '</div>';
                echo '</div>';
                echo '<div class="col">';
                echo '<h2>'.$datakomentar->nama.'</h2>';
                echo '<i class="bx bxs-star text-warning" ></i>';
                echo '<span style="font-size: 18px; color: Black;">'.$datakomentar->rating.'</span>';
                echo '<h4>'.$datakomentar->deskripsi.'</h4>';
                $no++;
                

            }
         }


         ?>






<!--
            <div class="row mb-4">
                <div class="col">
                    <textarea rows="5" style="width: 100%; color: #1F1F1F; border-radius: 10px;"
                        placeholder="Tulis ulasan..."></textarea>
                    <div class="mt-2 mb-4 text-right">
                        <a href=""><button class="btn btn-dark btn-md rounded-pill"
                                style="background-color: #113250;">Batal</button></a>
                        <a href=""><button class="btn btn-dark btn-md rounded-pill"
                                style="background-color: #113250;">Kirim</button></a>
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
                    <i class='bx bxs-star text-warning'></i>
                    <span style="font-size: 18px; color: white;">5</span>
                    <p class="mt-2">"Keren film nyee..."</p>
                </div>
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
                <i class='bx bxs-star text-warning'></i>
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
                <i class='bx bxs-star text-warning'></i>
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
                <i class='bx bxs-star text-warning'></i>
                <span style="font-size: 18px; color: white;">5</span>
                <p>"Keren film nyee..."</p>-->
            </div>
        </div>
    </div>
</body>

</html>