<?php
	
	class Profil extends Connection {
		private $email = '';
		private $name = '';
		private $nohp = '';
		private $userid = '';

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

		public function AddProfil(){
			$sql = "INSERT INTO user(email, name, nohp, userid)
					VALUES ('$this->email','$this->name', '$this->nohp', '$this->userid')";
			$this->hasil = $this->connection->exec($sql);
					
			if($this->hasil)
				$this->message ='Data berhasil ditambahkan!';					
			else
				$this->message ='Data gagal ditambahkan!';	
		}
		
		public function UpdateProfil(){
			$sql = "UPDATE user SET email = '$this->email', name='$this->name', nohp='$this->nohp' WHERE userid = '$this->userid'";
			$this->hasil = $this->connection->exec($sql);
				
			if($this->hasil)
				$this->message ='Data berhasil diubah!';
			else
				$this->message ='Data gagal diubah!';
		}
			
		public function DeleteProfil(){
			$sql = "DELETE FROM user WHERE userid=$this->userid";
			$this->hasil = $this->connection->exec($sql);
	
			if($this->hasil)
				$this->message ='Data berhasil dihapus!';								
			else
				$this->message ='Data gagal dihapus!';
		}
	
		//public function ValidateToken($token) {
			//$sql = "SELECT * FROM user WHERE token= '$token' AND aktif='0'";
			//$resultOne = $this->connection->query($sql);
			//if ($resultOne->rowCount() == 1){
				//while ($data = $resultOne->fetch(PDO::FETCH_OBJ)) {
					//$this->hasil = true;
					//$this->userid = $data->userid;
					//$this->email = $data->email;
					//$this->password=$data->password;
					//$this->name=$data->name;
					//$this->nohp=$data->nohp;
					//$this->token=$data->token;
					//$this->idrole=$data->roleid;
					//$this->aktif = $data->aktif;
				//}
			//}
		//}
	
		//public function UpdateAktif() {
			//$sql = "UPDATE user SET aktif='1' WHERE token='$this->token' AND aktif='0'";
			//$this->hasil = $this->connection->exec($sql);
		//}
		
	
		//public function ValidateEmail($inputemail){
			//$sql = "SELECT * FROM user WHERE email = '$inputemail' AND aktif='1'";
			//$resultOne = $this->connection->query($sql);
	
			//if ($resultOne->rowCount() == 1){
				//while ($data = $resultOne->fetch(PDO::FETCH_OBJ)) {
					//$this->hasil = true;
					//$this->userid = $data->userid;
					//$this->email = $data->email;
					//$this->password=$data->password;
					//$this->name=$data->name;
					//$this->nohp=$data->nohp;
					//$this->roleid=$data->roleid;
				//}
			//}
		//}
		
		public function SelectOneProfil(){
			$sql = "SELECT * FROM user WHERE userid = '$this->userid'";
			$result = $this->connection->query($sql);
			
			if($result->rowCount() == 1){
				while ($data = $result->fetch(PDO::FETCH_OBJ))
				{
					$this->userid = $data->userid;
					$this->email = $data->email;
					//$this->password = $data->password;
					$this->name = $data->name;
					$this->nohp = $data->nohp;
					//$this->idrole = $data->idrole;
				}
			}		
		}
		
		public function SelectAllProfil(){
			//$sql = "SELECT u.*, r.role FROM user u, role r WHERE u.idrole=r.idrole ORDER BY userid";
			$sql = "SELECT * FROM user"; 
			$result = $this->connection->query($sql);
			
			$arrResult = Array();
			$i=0;
			if($result->rowCount() > 0){
				while($data= $result->fetch(PDO::FETCH_OBJ))
				{
					$objUser = new Profil();
					$objUser->userid = $data->userid;
					$objUser->email = $data->email;
					$objUser->password = $data->password;
					$objUser->name=$data->name;
					$objUser->nohp=$data->nohp;
					//$objUser->idrole=$data->idrole;
					//$objUser->role=$data->role;
					$arrResult[$i] = $objUser;
					$i++;
				}
			}
			return $arrResult;
		}
		
		//public function SelectAllUserByUserid($currentuserid){
			//if ($currentuserid == NULL)
				//$sql = "SELECT * FROM user WHERE userid IS NULL";
			//else
				//$sql = "SELECT * FROM user WHERE userid = $currentuserid";				
			//$result = $this->connection->query($sql);
				
			//$arrResult = Array();
			//$cnt=0;
			//if($result->rowCount() > 0){				
				//while ($data= $result->fetch(PDO::FETCH_OBJ))
				//{
					//$objUser = new User(); 
					//$objUser->userid = $data->userid;
					//$objUser->email = $data->email;
					//$objUser->password = $data->password;
					//$objUser->name=$data->name;
					//$objUser->nohp=$data->nohp;
					//$objUser->idrole=$data->idrole;
					//$arrResult[$cnt] = $objUser;
					//$cnt++;
				//}
			//}
			//return $arrResult;
		//}
	}
	?>