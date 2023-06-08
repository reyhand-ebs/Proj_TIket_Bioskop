<?php
require_once "authorization_admin.php";
require_once('./class/class.user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Pengguna | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-1">
        <h4 class="mb-4">Daftar Pengguna</h4>
        <a href="?p=adduser"><button class="btn btn-primary btn-md rounded-pill" style="width: 130px;">+
                Tambah</button></a>
        <div class="mt-4">
            <table class="table table-bordered text-center" style="vertical-align: middle;">
                <thead>
                    <tr>
                        <th scope="col" class="col-1">User ID</th>
                        <th scope="col" class="col-3">Email</th>
                        <th scope="col" class="col-2">Nama</th>
                        <th scope="col" class="col-2">Nomor Telepon</th>
                        <th scope="col" class="col-1">Role</th>
                        <th scope="col" class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $objuser = new User();
                    $arrayResult = $objuser->SelectAllUser();
                    if (count($arrayResult) == 0) {
                        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
                    } else {
                        $no = 1;
                        foreach ($arrayResult as $datauser) {
                            echo '<tr>';
                            echo '<td>' . $datauser->userid . '</td>';
                            echo '<td>' . $datauser->email . '</td>';
                            echo '<td>' . $datauser->name . ' </td>';
                            echo '<td>' . $datauser->nohp . '</td>';
                            echo '<td>' . $datauser->roleid . '</td>';
                            echo '<td width="10%"><a class="btn btn-warning btn-sm"  href="dashboardadmin.php?p=edituser&userid=' . $datauser->userid . '"><span class="glyphicon glyphicon-edit">Edit</span></a> |
   					          <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deleteuser&userid=' . $datauser->userid . '" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')"> <span class="glyphicon glyphicon-remove">Delete</span></a>
							  </td>';
                            echo '</tr>';
                            $no++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>