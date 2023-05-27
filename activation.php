<html lang="en">

<head>
    <title>Aktivasi | Bioskop 165</title>
</head>

<body>
    <div class="container" align="center">
        <br>
        <?php
        include('./inc.koneksi.php');
        require_once('./class/class.user.php');
        //$token=$_GET['t'];
        date_default_timezone_set("Asia/Jakarta");
        $token=hash('sha256', md5(date('Y-m-d').date("h")));

        $objUser = new User();
	    $objUser->ValidateToken($token);

    	if ($objUser->hasil) {
            $objUser->UpdateAktif();
            echo '<div class="alert alert-success">Akun anda sudah aktif, silahkan <a href="index.php?p=login">Login</a></div>';
        } else {
            //data tidak di temukan
            echo '<div class="alert alert-warning">Invalid Token!</div>';
        }
        ?>
    </div>
</body>

</html>