<?php 
	class Role extends Connection 
	{
		private $roleid = 0;
		private $nama_role = '';
		private $hasil = false;
		private $message ='';

		public function __get($atribute) {
			if (property_exists($this, $atribute)) {
				return $this->$atribute;
				}
		}
	
		public function __set($atribut, $value){
			if (property_exists($this, $atribut)) {
					$this->$atribut = $value;
			}
		}
				
		public function AddRole()   {
			$sql = "INSERT INTO role(nama_role) 
		            values ('$this->nama_role')";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';
		}
		
		public function UpdateRole() {
			$sql = "UPDATE nama_role SET nama_role ='$this->nama_role'
					WHERE roleid = $this->roleid";

			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil diubah!';					
		    else
			   $this->message ='Data gagal diubah!';
		}
		
		public function DeleteRole() {
            $sql = "DELETE FROM role WHERE roleid=$this->roleid";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil dihapus!';					
		    else
			   $this->message ='Data gagal dihapus!';
		}
		
		public function SelectAllRole() {
            $sql = "SELECT * FROM role";
			$result = $this->connection->query($sql);
		
			$arrResult = Array();
			$i=0;
			if($result->rowCount() > 0){
				while($data= $result->fetch(PDO::FETCH_OBJ))
				{
					$objRole = new Role();
					$objRole->roleid = $data->roleid;
					$objRole->nama_role = $data->nama_role;
					$arrResult[$i] = $objRole;
					$i++;
				}
			}
			return $arrResult;
		}
		
		public function SelectOneRole() {
            $sql = "SELECT * FROM role WHERE roleid='$this->roleid'";
			$result = $this->connection->query($sql);

			if($result->rowCount() == 1){
				while ($data = $result->fetch(PDO::FETCH_OBJ))
				{
					$this->roleid = $data->roleid;
					$this->nama_role = $data->nama_role;
				}
			}				
		}
 	}	 
?>
