<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<title>Detail Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style1.css">

   
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
                <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #113250; color: #FFFFFF; font-weight: 500; text-align: center; width: 130px;">Beli Tiket</button></a>
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

        <!--<div class="row">
            <div id="star-rating">
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="1">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="2">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="3">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="4">&#9733;</span>
                <span class="star" style="font-size: 25px; color: gray; cursor: pointer;" data-rating="5">&#9733;</span>
            </div>
            <p id="selected-rating"></p>
            <script src="./js/script.js"></script>
            <style>
                .star:hover, .star.active {
                    color: gold !important;
                }
            </style>
        </div>-->

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
       <br>
       <br>
        
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
                <textarea rows="4" style="width: 100%; color: #1F1F1F; border-radius: 10px;" placeholder="Tulis ulasan..."></textarea>
                <div class="mt-2 mb-4 text-right">
                    <a href=""><button class="btn btn-lg rounded-pill" style="color: #FFFFFF; font-weight: 400; font-size: 15px;">Batal</button></a>
                    <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #113250; color: #FFFFFF; font-weight: 400; font-size: 15px;">Kirim</button></a>
                </div>
            </div>
        </div>-->
       
       
    </div>
</body>
</html>