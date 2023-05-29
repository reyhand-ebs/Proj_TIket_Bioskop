<div class="container">  
<div class="span11">			
  <h4 class="title"><span class="text"><strong>Profil</strong></span></h4>
  <a class="btn btn-primary" href="dashboardadmin.php?p=addprofil">Add</a>
  <br>
  <br>  
<table class="table">
	<tr>
	<th>No.</th>
	<th>Nama User</th>
	<th>Email User</th>
	<th>No Handphone</th>
	<th>Action</th>
	</tr>	
	<?php
		require_once('./class/class.Profil.php'); 		
		$objUser= new Profil(); 
		$arrayResult = $objUser->SelectAllProfil();

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="4">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $datauser) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					//echo '<td>'.$datauser->userid.'</td>';	
					echo '<td>'.$datauser->name.'</td>';
					echo '<td>'.$datauser->email.'</td>';
					echo '<td>'.$datauser->nohp.'</td>';
					echo '<td><a class="btn btn-warning"  href="dashboardadmin.php?p=profil&userid='.$datauser->userid.'">Edit</a> |
   					          <a class="btn btn-danger"  href="dashboardadmin.php?p=deleteProfil&userid='.$datauser->userid.'" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete</a></td>';	
				echo '</tr>';
				
				$no++;	
			}
		}
		?>
</table>
</div>
</div>