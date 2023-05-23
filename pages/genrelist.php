<div class="container">  
<div class="span11">			
  <h4 class="title"><span class="text"><strong>Genre List</strong></span></h4>
  <a class="btn btn-primary" href="dashboardadmin.php?p=genre">Add</a>
  <br>
  <br>  
<table class="table">
	<tr>
	<th>No.</th>
	<th>ID genre</th>
	<th>Nama genre</th>
	<th>Deskripsi</th>
	<th>Action</th>
	</tr>	
	<?php
		require_once('./class/class.genre.php'); 		
		$objgenre= new Genre(); 
		$arrayResult = $objgenre->SelectAllGenre();

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="4">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $datagenre) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$datagenre->genreid.'</td>';	
					echo '<td>'.$datagenre->nama_genre.'</td>';
					echo '<td>'.$datagenre->deskripsi.'</td>';
					echo '<td><a class="btn btn-warning"  href="dashboardadmin.php?p=genre&genreid='.$datagenre->genreid.'">Edit</a> |
   					          <a class="btn btn-danger"  href="dashboardadmin.php?p=deletegenre&genreid='.$datagenre->genreid.'" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete</a></td>';	
				echo '</tr>';
				
				$no++;	
			}
		}
		?>
</table>
</div>
</div>
