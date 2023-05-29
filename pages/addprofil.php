<?php 
require_once "authorization_admin.php";
//include('../inc.koneksi.php');
require_once('./class/class.Profil.php'); 	
	

$objUser = new Profil(); 

if(isset($_POST['btnSubmit'])){	
	$objUser->name = $_POST['name'];	
    $objUser->nohp = $_POST['nohp'];
	
	if(isset($_GET['userid'])){		
		$objUser->userid = $_GET['userid'];
		$objUser->UpdateProfil();
	}
	else{	
		$objUser->AddProfil();
	}			
	
	if($objUser->hasil){
		echo "<script> alert('".$objUser->message."'); </script>";
		echo '<script> window.location = "dashboardadmin.php?p=profillist";</script>'; 				
	}
	else{
		echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";	
	}			
}
else if(isset($_GET['userid'])){	
	$objUser->userid = $_GET['userid'];	
	$objUser->SelectOneProfil();
}
?>
<div class="container">  
<div class="span7">			
  <h4 class="title"><span class="text"><strong>Profil</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>nama</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="nama" name="name" value="<?php echo $objUser->name; ?>"></td>
	</tr>	
	<tr>
	<td>Nohp</td>
	<td>:</td>
	<td>
	<textarea style="width:55%" name="nohp" rows="3" cols="19"><?php echo $objUser->nohp; ?></textarea></td>
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