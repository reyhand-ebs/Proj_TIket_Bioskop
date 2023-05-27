<?php 
require_once('./class/class.banner.php'); 		
$objBanner = new Banner(); 

if(isset($_POST['btnSubmit'])){	
	//$objBanner->id = $_POST['id'];
    $objBanner->nama = $_POST['nama'];
    $objBanner->deskripsi1 = $_POST['deskripsi1'];
	$objBanner->deskripsi2 = $_POST['deskripsi2'];
	$objBanner->foto =$_POST['foto'];	
	$message = '';
	$isSuccessUpload = false;
		
	if(isset($_GET['id'])){		
		$objBanner->id = $_GET['id'];
		$objBanner->UpdateBanner();
	}
	else{
		$objBanner->AddBanner();					
	}	
		
	if(!$objBanner->hasil){			
		echo "<script> alert('Proses gagal. Silakan ulangi'); </script>";	
		die();
	}
	

	if(file_exists($_FILES['foto']['tmp_name']) || is_uploaded_file($_FILES['foto']['tmp_name'])){			
		$lokasifile = $_FILES['foto']['tmp_name'];
		$nama_file =  $_FILES['foto']['name'];
		$extension  = pathinfo( $_FILES["foto"]["name"], PATHINFO_EXTENSION ); 
		$objBanner->foto   = $extension; 
		$folder = "./banner/";
		$isSuccessUpload = move_uploaded_file($lokasifile, $folder.$objBanner->foto);
	}
	else
		$isSuccessUpload = true;
	//$folder		= '../img/banner';
		//type file yang bisa diupload
	//$file_type	= array('jpg','jpeg','png','gif','bmp');
	//$max_size	= 1000000; // 1MB	
	//$isErrorFile   = false;
	//$isSuccessUpload = true;
	
	//if (!empty($_FILES['foto']['name'])) {	
		//$file_name	= $_FILES['foto']['name'];
		//$file_size	= $_FILES['foto']['size'];
		//cari extensi file dengan menggunakan fungsi explode
		//$explode	= explode('.',$file_name);
		//$extensi	= $explode[count($explode)-1];
		//check apakah type file sudah sesuai
		//if(!in_array($extensi,$file_type)){
			//$isErrorFile   = true;
			//$message .= 'Type file yang anda upload tidak sesuai';
		//}
		//if($file_size > $max_size){
			//$isErrorFile   = true;
			//$message .= 'Ukuran file melebihi batas maximum';
		//}	
		
		//if($isErrorFile){
			//echo "<script> alert('$message'); </script>";
		//}
		//else{
			//$objBanner->foto = $objBanner->id.'.'.$extensi;			
			//$isSuccessUpload = move_uploaded_file($_FILES['foto']['tmp_name'], $folder.$objBanner->foto);	
			
			//if(!$isSuccessUpload){
				//echo "<script> alert('Upload error'); </script>";
				//die();
			//}			
		//}
	//}
		
	if($isSuccessUpload){					 
		$objBanner->UpdateFotoBanner();
		if($objBanner->hasil){			
			echo "<script> alert('$objBanner->message'); </script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0;'; 				
		}
		else
			echo "<script> alert('Proses update gagal. Silakan ulangi'); </script>";			
	}
	else
		echo "<script> alert('Proses upload gagal. Silakan ulangi'); </script>";			
				
}
else if(isset($_GET['id'])){	
	$objBanner->id = $_GET['id'];	
	$objBanner->SelectOneBanner();
}
?>

<section class="main-content">				
	<div class="row">						
		<div class="span12">
			<div class="row">
				<div class="span3">
				<br/>
					<?php 
						if($objBanner->foto !='')
							echo "<img src='banner/".$objBanner->foto."' width='300px' height='350px'/>"; 
						else
							echo "<img src='banner/default.jpg' width='300px' height='350px'/>"; 
					?>								
				</div>
				<div class="span6">
				<h4 class="title"><span class="text"><strong>BANNER</strong></span></h4>
				<form action="" method="post" enctype="multipart/form-data">
					<table class="table" border="0">
					<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" class="form-control" id="nama" name="nama" value="<?php echo $objBanner->nama; ?>"></td>
					</tr>
					<tr>
					<td>Deskripsi1</td>
					<td>:</td>
					<td><input type="text" class="form-control" id="deskripsi1" name="deskripsi1" value="<?php echo $objBanner->deskripsi1; ?>"></td>
					</tr>
					<tr>
					<td>Deskripsi2</td>
					<td>:</td>
					<td><input type="text" class="form-control" id="deskripsi2" name="deskripsi2" value="<?php echo $objBanner->deskripsi2; ?>"></td>
					</tr>
					<tr>
					<td>Upload Foto</td>
					<td>:</td>
					<td><input type="file" class="form-control" id="foto" name="foto">
						<input type="hidden" name="foto" value="<?php echo $objBanner->foto; ?>">	
					</td>
					</tr>		
					<tr>
					<td></td>
					<td></td>
					<td><input type="submit" class="btn btn-primary" value="Save" name="btnSubmit">
						<!--<a href="index.php?p=bannerlist" class="btn btn-primary">Cancel</a></td>-->
					</tr>	
					</table>    
				</form>		
				</div>							
			</div>						
		</div>		
	</div>
</section>			
	