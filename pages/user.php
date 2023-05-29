<?php 
//include('../inc.koneksi.php')
//require_once "authorization_admin.php";
require_once('./class/class.user.php'); 	
	
$objuser = new user(); 

if(isset($_POST['btnSubmit'])){	
	$objemail->email = $_POST['email'];	
    $objemail->nama = $_POST['nama'];
	$objemail->nohp = $_POST['nohp'];	
    $objemail->aktif = $_POST['aktif'];
	
	if(isset($_GET['usereid'])){		
		$objuser->userid = $_GET['userid'];
		$objuser->UpdateUser();
	}
	else{	
		$objuser->AddUser();
	}			
	
	if($objuser->hasil){
		echo "<script> alert('".$objuser->message."'); </script>";
		echo '<script> window.location = "dashboardadmin.php?p=genrelist";</script>'; 				
	}
	else{
		echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";	
	}			
}
else if(isset($_GET['userid'])){	
	$objuser->userid = $_GET['userid'];	
	$objuser->SelectOneUser();
}
?>
<div class="container">  
<div class="span7">			
  <h4 class="title"><span class="text"><strong>User</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>email</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="email" name="email" value="<?php echo $objuser->email; ?>"></td>
	</tr>	
	<tr>
	<td>nama</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="nama" name="nama" value="<?php echo $objuser->nama; ?>"></td>
	</tr>
    <tr>
	<td>nohp</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $objuser->nohp; ?>"></td>
	</tr>	
    <tr>
	<td>aktif</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="aktif" name="aktif" value="<?php echo $objuser->aktif; ?>"></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type="submit" class="btn btn-primary" value="Save" name="btnSubmit">
	   <!-- <a href="index.php?p=categorylist" class="btn btn-primary">Cancel</a></td> -->
	</tr>	
	</table>    
</form>	
</div>  
</div>




