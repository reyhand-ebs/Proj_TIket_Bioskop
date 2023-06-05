<?php
require_once "authorization_admin.php";
require_once('./class/class.user.php');

$objuser = new user();

if (isset($_POST['btnTambah'])) {
	$objuser->email = $_POST['userid'];
	$objuser->email = $_POST['email'];
	$password = $_POST['password'];
	$objUser->password = password_hash($password, PASSWORD_DEFAULT);
	$objUser->passwordsecr = $password;
	$objuser->name = $_POST['name'];
	$objuser->nohp = $_POST['nohp'];
	$objuser->token = $_POST['token'];
	$objuser->aktif = '0';
	$objuser->roleid = $_POST['roleid'];
	$objuser->AddUser();
	if ($objuser->hasil) {
		echo "<script> alert('" . $objuser->message . "'); </script>";
		echo '<script> window.location = "?p=userlist";</script>';
	} else {
		echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tambah Pengguna | Admin Bioskop 165</title>
</head>

<body>
	<div class="mt-5 mb-5 px-5">
		<h3 class="mb-5">Tambah Pengguna</h3>
		<form class="mb-5" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="userid">ID Pengguna</label>
						<?php
						$maxUserID = $objuser->getMaxUserID();
						$nextUserID = $maxUserID + 1;
						echo '<input name="userid" type="text" class="form-control" id="userid" value="' . $nextUserID . '"
						readonly>';
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="email">Email</label>
						<input name="email" type="email" class="form-control" id="email" value="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="password">Password</label>
						<input name="password" type="password" class="form-control" id="password" value="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="name">Nama</label>
						<input name="name" type="text" class="form-control" id="name" value="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="nohp">Nomor Telepon</label>
						<input name="nohp" type="text" class="form-control" id="nohp" value="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="nohp">Token</label>
						<?php
						date_default_timezone_set("Asia/Jakarta");
						$token = hash('sha256', md5(date('Y-m-d') . date("h")));
						echo '<input name="token" type="text" class="form-control" id="token"
                            value="' . $token . '" readonly>';
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group mb-2">
						<label for="roleid">Role</label>
						<input name="roleid" type="text" class="form-control" id="roleid" value="role2" readonly>
					</div>
				</div>
			</div>
			<div class="text-right pt-3">
				<button class="btn btn-lg rounded-pill btn-primary fw-semibold" style="width: 130px;" name="btnTambah"
					type="submit">Tambah</button>
			</div>
		</form>
	</div>
</body>

</html>