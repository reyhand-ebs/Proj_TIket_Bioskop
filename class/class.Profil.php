<?php
	class Profil extends Connection {
		private $email='';
		private $fname = '';
		private $lname = '';
		private $history = '';
		private $nohp = '';
		private $idUser = '';

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
			$sql = "INSERT INTO profil (email,  fname, lname, history, nohp, idUser)
				   VALUES ('$this->email', '$this->fname', '$this->lname', '$this->history', '$this->nohp', '$this->idUser')";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';	
		}


		public function UpdateProfil(){
			$sql = "UPDATE profil 
			        SET fname ='$this->fname',
					lname = '$this->lname',
					history = '$this->history',
					nohp = '$this->nohp',
					idUser = '$this->idUser'
					WHERE email = $this->email";
					
					
			$this->hasil = mysqli_query($this->connection, $sql);			
			
			if($this->hasil)
				$this->message ='Data berhasil diubah!';								
			else
				$this->message ='Data gagal diubah!';								
		}



		public function DeleteProfil(){
			$sql = "DELETE FROM profil WHERE email='$this->email'";
			$this->hasil = mysqli_query($this->connection, $sql);
			if($this->hasil)
				$this->message ='Data berhasil dihapus!';								
			else
				$this->message ='Data gagal dihapus!';
		}



		public function SelectAllProfil(){					
			$sql = "SELECT p.*, u.nama, u.email FROM profil a, userr u  WHERE p.idUser = b.idUser ORDER BY email ASC";			
			$result = mysqli_query($this->connection, $sql);	
			
			$arrResult = Array();
			$cnt=0;
			if(mysqli_num_rows($result) > 0){				
				while ($data = mysqli_fetch_array($result))
				{
					$objProfil = new Profil(); 
					$objProfil->email=$data['email'];
					$objProfil->fname=$data['fname'];
					$objProfil->lname=$data['lname'];
					$objProfil->kota=$data['kota'];
					$objProfil->negara=$data['negara'];
					$objProfil->history=$data['history'];
					$objProfil->idUser=$data['idUser'];
					$arrResult[$cnt] = $objProfil;
					$cnt++;
				}
			}
			return $arrResult;			
		}



		public function SelectOneProfil(){
			$sql = "SELECT p.*, u.nama, u.email FROM profil a, userr u  WHERE p.idUser = b.idUser and p.idUser='$this->email'";
			$resultOne = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));	
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->email = $data['email'];				
				$this->fname = $data['fname'];				
				$this->lname = $data['lname'];				
				$this->kota = $data['kota'];				
				$this->negara = $data['negara'];				
				$this->history=$data['history'];
				$this->idUser=$data['idUser'];
			}
		}

		
	}
?>