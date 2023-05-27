<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Pengguna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container mt-5 mb-5">
        <h3 class="mb-5">Tambah/Ubah Pengguna</h3>

        <form class="mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="userid">ID Pengguna</label>
                        <input type="number" class="form-control" id="userid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="nohp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nohp">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="roleid">Role</label>
                        <input type="text" class="form-control" id="roleid">
                    </div>
                </div> 
            </div>

        </form>

        <div class="text-right">
            <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #E50913; font-weight: 500; text-align: center; width: 130px;">Batal</button></a>
            <a href=""><button class="btn btn-dark btn-lg rounded-pill" style="background-color: #113250; font-weight: 500; text-align: center; width: 130px;">Simpan</button></a>
        </div>
    
    </div>
        
</body>