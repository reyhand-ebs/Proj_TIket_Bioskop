<?php
require_once('./class/class.user.php');
require_once('./class/class.mail.php');

if (isset($_POST['btnSubmit'])) {
    $inputemail = $_POST["email"];

    $objUser = new User();
    $objUser->ValidateEmail($inputemail);
    $objUser->hasil = false;
    if ($objUser->hasil) {
        echo "<script>alert('Email tidak terdaftar'); </script>";
    } else {
        $objUser->email = $_POST["email"];
        date_default_timezone_set("Asia/Jakarta");
        $token = hash('sha256', md5(date('Y-m-d') . date("h")));
        $objUser->token = $token;
        $objUser->UpdateToken();

        $subject = "Konfirmasi Ganti Password";
        $message = '<span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
					Silakan klik tautan berikut untuk mengganti password email anda:
					</span>
					<span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
						<a href="http://localhost/Proj_Tiket_Bioskop/changepassword.php?t=' . $token . '">http://localhost/Proj_Tiket_Bioskop/changepassword.php?t=' . $token . '</a>
					</span>';

        Mail::SendMail($objUser->email, $objUser->name, $subject, $message);

        echo "<script> alert('Konfirmasi email berhasil dikirim, silahkan cek email anda'); </script>";
        echo '<script> window.location="index.php?p=login"; </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lupa Password | Bioskop 165</title>
</head>

<body>
    <div class="container py-5 justify-content-center rounded-5" id="inputlogin">
        <div class="row">
            <div class="col align-self-center">
                <h1 class="title pb-3 text-center"><strong>Lupa Password</strong></h1>
                <form action="" class="row g-3 justify-content-center" method="POST">
                    <div class="col-md-10">
                        <p class="pb-4">Untuk mengatur ulang kata sandi Anda, kirimkan alamat email Anda di bawah ini. Jika
                            kami dapat menemukan Anda di database, email akan dikirim ke alamat email Anda, dengan
                            tautan untuk mengubah kata sandi.</p>
                        <label for="email">Masukkan email :</label>
                        <input type="email" class="form-control mt-2 form-control-lg rounded-pill" placeholder=""
                            name="email" required>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" name="btnSubmit" type="submit"
                            value="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>