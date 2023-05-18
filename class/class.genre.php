<?php 
	
	class Genre extends Connection
	{
		private $genreid ='';
		private $nama_genre = '';
		private $deskripsi = '';
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
				
		public function AddGenre(){
			$sql = "INSERT INTO genre(genreid, nama_genre, deskripsi) 
		            values ('$this->genre', '$this->nama_genre', '$this->deskripsi')";
			$this->hasil = $this->connection->exec($sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';	
		}
		
		public function UpdateGenre(){
			$sql = "UPDATE genre SET nama ='$this->nama',
					deskripsi = '$this->deskripsi'
					WHERE genreid = $this->genreid";

			$this->hasil = $this->connection->exec($sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil diubah!';					
		    else
			   $this->message ='Data gagal diubah!';	
		}
		
		public function DeleteGenre(){
			$sql = "DELETE FROM genre WHERE genreid=$this->genreid";
			$this->hasil = $this->connection->exec($sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil dihapus!';					
		    else
			   $this->message ='Data gagal dihapus!';	
		}
		
		public function SelectAllGenre(){
			$sql = "SELECT * FROM genre";
				
			$result = $this->connection->query($sql);	
			$arrResult = Array();
			$cnt=0;
			if($result->rowCount() > 0){				
				while ($data = $result->fetch(PDO::FETCH_OBJ))
				{
					$objgenre = new Genre(); 
					$objgenre->genreid=$data->genreid;
					$objgenre->nama_genre=$data->nama_genre;
					$objgenre->deskripsi=$data->deskripsi;
					$arrResult[$cnt] = $objgenre;
					$cnt++;
				}
			}
			return $arrResult;			
		}
		
		public function SelectOneGenre(){
			$sql = "SELECT * FROM genre WHERE genreid='$this->genreid'";
			$resultOne = $this->connection->query($sql);	
			if($resultOne->rowCount() == 1){
                while($data = $resultOne->fetch(PDO::FETCH_OBJ))
                {
				    //$this->hasil = true;
				    //$data = mysqli_fetch_assoc($resultOne);
                    $this->genreid = $data->genreid;
				    $this->nama_genre = $data->nama_genre;				
				    $this->deskripsi = $data->deskripsi;
                }    	
                			
			}							
		}
 	}	 
?>
