<?php 
require_once "authorization_admin.php";
//include('../inc.koneksi.php');
require_once('./class/class.genre.php'); 	
	

$objgenre = new Genre(); 

if(isset($_POST['btnSubmit'])){	
	$objgenre->nama_genre = $_POST['nama_genre'];	
    $objgenre->deskripsi = $_POST['deskripsi'];
	
	if(isset($_GET['genreid'])){		
		$objgenre->genreid = $_GET['genreid'];
		$objgenre->UpdateGenre();
	}
	else{	
		$objgenre->AddGenre();
	}			
	
	if($objgenre->hasil){
		echo "<script> alert('".$objgenre->message."'); </script>";
		echo '<script> window.location = "dashboardadmin.php?p=genrelist";</script>'; 				
	}
	else{
		echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";	
	}			
}
else if(isset($_GET['genreid'])){	
	$objgenre->genreid = $_GET['genreid'];	
	$objgenre->SelectOneGenre();
}
?>
<div class="container">  
<div class="span7">			
  <h4 class="title"><span class="text"><strong>Genre</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>nama</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="nama" name="nama_genre" value="<?php echo $objgenre->nama_genre; ?>"></td>
	</tr>	
	<tr>
	<td>Deskripsi</td>
	<td>:</td>
	<td>
	<textarea style="width:55%" name="deskripsi" rows="3" cols="19"><?php echo $objgenre->deskripsi; ?></textarea></td>
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




