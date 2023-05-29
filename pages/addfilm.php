<?php 
require_once "authorization_admin.php";
//include('./inc.koneksi.php');
//require_once "authorization_admin.php";
require_once('./class/class.film.php'); 		
$objfilm = new Film(); 
//$managerList = $objEmployee->SelectAllManager();
//$deptList = $objEmployee->SelectDepartment();

if(isset($_POST['btnSubmit'])){	
   // $objfilm->id_film = $_POST['id_film']
    $objfilm->judul_film = $_POST['judul_film'];	 
	$objfilm->rilis = $_POST['rilis'];	
	$objfilm->genre = $_POST['genre'];	
	$objfilm->detail_film = $_POST['detail_film'];	
	$objfilm->durasi = $_POST['durasi'];	
    $objfilm->produser = $_POST['produser'];
	$objfilm->penulis = $_POST['penulis'];
	$objfilm->sutradara = $_POST['sutradara'];
	$objfilm->produksi = $_POST['produksi'];
	$objfilm->aktor = $_POST['aktor'];
		 
	
	if(isset($_GET['id_film'])){		
		$objfilm->id_film = $_GET['id_film'];
		$objfilm->UpdateFilm();
	}
	else{	
		$objfilm->AddFilm();
	}			
	
	echo "<script> alert('$objfilm->message'); </script>";
	if($objfilm->hasil){
		echo '<script> window.location = "dashboardadmin.php?p=filmlist";</script>';
	}
				
}
else if(isset($_GET['id_film'])){	
	$objfilm->id_film = $_GET['id_film'];	
	$objfilm->SelectOneFilm();
}	
?>
<div class="container">  
<h4 class="title"><span class="text"><strong>Film</strong></span></h4>  
    <form action="" method="post">
	<div class="row">
	<div class="col-md-8">	
     <!--   	
	<?php
		//if($objEmployee->photo != null)
		//	echo '<img class="img-rounded img-responsive" src="upload/'.$objEmployee->photo.'">';	
		//else
		//	echo '<img class="img-rounded img-responsive" src="upload/default.png">';	
		?>
		<input type="hidden" name="photo" value="<?php ///echo $objEmployee->photo; ?>">
	</div>
-->
	<div class="col-md-5">		
	<table class="table" border="0">
	<tr>
	<td>Judul</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="judul_film" value="<?php echo $objfilm->judul_film; ?>"></td>
	</tr>	
	<tr>
	<td>Rilis</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="rilis" value="<?php echo $objfilm->rilis; ?>"></td>
	</tr>	
	<tr>
	<tr>
	<td>Genre</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="genre" value="<?php echo $objfilm->genre; ?>"></td>
	</tr>	
	<tr>
	<td>Durasi</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="durasi" value="<?php echo $objfilm->durasi; ?>"></td>
	</tr>
	<tr>
	<td>Detail</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="detail_film" value="<?php echo $objfilm->detail_film; ?>"></td>
	</tr>	
	</table>
	</div>
	<div class="col-md-5">			
	<table class="table" border="0">
	<tr>
	<tr>
	<td>Produser</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="produser" value="<?php echo $objfilm->produser; ?>"></td>
	</tr>	
	<tr>
	<td>Penulis</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="penulis" value="<?php echo $objfilm->penulis; ?>"></td>
	</tr>	
	<tr>
	<td>Sutradara</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="sutradara" value="<?php echo $objfilm->sutradara; ?>"></td>
	</tr>
	<tr>
	<tr>
	<td>produksi</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="produksi" value="<?php echo $objfilm->produksi; ?>"></td>
    <!--    
	 <select name="super_ssn" class="form-control">
	 <option value="">--Please select supervisor--</option>
		<?php		
			//foreach ($managerList as $emp){ 								
			//	if($objEmployee->super_ssn == $emp->super_ssn)				
			//		echo '<option selected="true" value='.$emp->super_ssn.'>'.$emp->super_name.'</option>';
			//	else
			//		echo '<option value='.$emp->super_ssn.'>'.$emp->super_name.'</option>';
		//	} 
		?>
        	
	</select>	
            -->
	</tr>
	<tr>
	<td>Aktor</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="aktor" value="<?php echo $objfilm->aktor; ?>">
    <!--    
	<select name="dno" class="form-control">
	 <option value="">--Please select department--</option>
		<?php		
			//foreach ($deptList as $dept){ 								
			//	if($objEmployee->dno == $dept->dno)				
			//		echo '<option selected="true" value='.$dept->dno.'>'.$dept->dname.'</option>';
			//	else
			//		echo '<option value='.$dept->dno.'>'.$dept->dname.'</option>';
		//	} 
		?>	
		</select>
        -->    
	</td>
	</tr>
	</table>    
	</div>
	<input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
	<a href="dashboardadmin.php?p=employeelist" class="btn btn-warning">Cancel</a></td>
</form>	  
</div>
<br>
<!--
	<?php 
	 // if(isset($_GET['ssn'])){	
		// include('dependentlist.php'); 		
	 // }
	?>
-->


