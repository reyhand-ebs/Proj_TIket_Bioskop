<?php
 // require_once "authorization_admin.php";
?>
<div class="container">  
<div>			
  <h4 class="title"><span class="text"><strong>User List</strong></span></h4>
  <a class="btn btn-primary" href="dashboardadmin.php?p=User">Add</a>
  <br>
  <br>
<table class="table table-bordered">
<thead>
	<tr>
	<th>No.</th>
	<th>Email</th>
	<th>Nama</th>
	<th>No Hp</th>
	<th>Aktif</th>
	</tr>	
	</thead>
	<tbody>
	<?php
		require_once('./class/class.user.php'); 		
		$objuser = new User(); 
		$arrayResult = $objuser->SelectAllUser();
		

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $datauser) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';
					echo '<td>'.$datauser->email.'</td>';	
					echo '<td>'.$datauser->name.' </td>';
					echo '<td>'.$datauser->nohp.'</td>';
					echo '<td>'.$datauser->aktif.'</td>';
					echo '<td width="10%"><a class="btn btn-warning btn-sm"  href="dashboardadmin.php?p=film&id_film='.$datauser->userid.'"><span class="glyphicon glyphicon-edit"></span></a>
   					          <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deletefilm&id_film='.$datauser->userid.'" 
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

