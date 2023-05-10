<html lang="en">

<head>
    <title>Tubirit | Login</title>
</head>

<body>
    <div class="container" align="center">
        <br>
        <?php
        include('./inc.koneksi.php');
        require_once('./class/class.user.php');
        //$token=$_GET['t'];
        $token = hash('sha256', md5(date('Y-m-d')));

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