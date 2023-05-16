<?php
 // require_once "authorization_admin.php";
?>
<div class="container">  
<div>			
  <h4 class="title"><span class="text"><strong>film List</strong></span></h4>
  <a class="btn btn-primary" href="dashboardadmin.php?p=film">Add</a>
  <br>
  <br>
<table class="table table-bordered">
<thead>
	<tr>
	<th>No.</th>
	<th>Judul</th>
	<th>Rilis</th>
	<th>Genre</th>
	<th>Durasi</th>
	<th>Detail</th>
	<th>produser</th>
	<th>Penulis</th>
	<th>Sutradara</th>
	<th>Produksi</th>
	<th>aktor</th>
    <th>action</th>
	</tr>	
	</thead>
	<tbody>
	<?php
		require_once('./class/class.film.php'); 		
		$objfilm = new Film(); 
		$arrayResult = $objfilm->SelectAllFilm();
		

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $datafilm) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					//if($dataEmp->photo != null)
						//echo '<td><img class="img-responsive" src="upload/'.$dataEmployee->photo.'" width="20" height="30"></td>';
					//else
						//echo '<td><img class="img-responsive" src="upload/default.png" width="20" height="30"></td>';				
				
					echo '<td>'.$datafilm->judul_film.'</td>';	
					echo '<td>'.$datafilm->rilis.' </td>';
					echo '<td>'.$datafilm->genre.'</td>';
					echo '<td>'.$datafilm->durasi.'</td>';
					echo '<td>'.$datafilm->detail_film.'</td>';
					echo '<td>'.$datafilm->produser.'</td>';
					echo '<td>'.$datafilm->penulis.'</td>';
					echo '<td>'.$datafilm->sutradara.'</td>';
					echo '<td>'.$datafilm->produksi.'</td>';
                    echo '<td>'.$datafilm->aktor.'</td>';
					echo '<td width="10%"><a class="btn btn-warning btn-sm"  href="dashboardadmin.php?p=film&id_film='.$datafilm->id_film.'"><span class="glyphicon glyphicon-edit"></span></a>
   					          <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deletefilm&id_film='.$datafilm->id_film.'" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')"> <span class="glyphicon glyphicon-remove"></span></a>
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

