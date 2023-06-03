<?php
require_once "authorization_admin.php";
require_once('./class/class.user.php');
$objUser = new User();
$objUser->userid = $_GET['userid'];
$objUser->SelectOneUser();

if (isset($_POST['btnSimpan'])) {
    $name = $_POST['name'];
    $objUser->name = $name;
    $objUser->email = $_POST['email'];
    $password = $_POST['password'];
    if (strlen($password) < 8) {
        echo "<script>alert('Password harus terdiri dari minimal 8 karakter');</script>";
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
        echo "<script>alert('Password hanya boleh terdiri dari huruf abjad dan angka');</script>";
    } else if ($password == strtolower($password)) {
        echo "<script>alert('Password harus mengandung huruf kapital');</script>";
    } else {
        $objUser->password = password_hash($password, PASSWORD_DEFAULT);
        $objUser->passwordsecr = $_POST['password'];
        $objUser->nohp = $_POST['nohp'];
        $objUser->UpdateUser();
        echo '<script>if(confirm("Apakah Anda yakin ingin menyimpan?")) { alert("Data akun ' .$name. ' berhasil diubah."); window.location.href = "?p=userlist"; }</script>';
    }
}

if (isset($_POST['btnBatal'])) {
    echo '<script>if(confirm("Apakah Anda yakin ingin membatalkan?")) { window.location.href = "?p=userlist"; }</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Pengguna | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <h3 class="mb-5">Ubah Pengguna</h3>
        <form class="mb-5" method="POST">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="userid">ID Pengguna</label>
                        <input type="text" class="form-control" id="userid" value="<?php echo $objUser->userid; ?>"
                            disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email"
                            value="<?php echo $objUser->email; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password"
                            value="<?php echo $objUser->passwordsecr; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="name">Nama</label>
                        <input name="name" type="text" class="form-control" id="name"
                            value="<?php echo $objUser->name; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="nohp">Nomor Telepon</label>
                        <input name="nohp" type="text" class="form-control" id="nohp"
                            value="<?php echo $objUser->nohp; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group mb-2">
                        <label for="roleid">Role</label>
                        <input type="text" class="form-control" id="roleid" value="<?php echo $objUser->roleid; ?>"
                            disabled>
                    </div>
                </div>
            </div>
            <div class="text-right pt-5">
                <button class="btn btn-lg rounded-pill btn-danger fw-semibold" style="width: 130px;" name="btnBatal"
                    type="submit">Batal</button>
                <button class="btn btn-lg rounded-pill btn-primary fw-semibold" style="width: 130px;" name="btnSimpan"
                    type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>