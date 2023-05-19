<?php

class Film extends Connection {
	private $id_film='';
	private $judul_film = '';
	private $rilis = '';		
	private $genre = '';
    private $durasi='';
	private $detail_film = '';
	private $produser = '';		
	private $penulis = '';
    private $sutradara = '';
    private $produksi = '';
    private $aktor = '';
	
	private $hasil= false;
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

	public function AddFilm(){
		$sql = "INSERT INTO film(judul_film, rilis, genre, durasi, detail_film, produser, penulis, sutradara, produksi, aktor)
				VALUES ('$this->judul_film', '$this->rilis', '$this->genre', '$this->durasi', '$this->detail_film', '$this->produser','$this->penulis', '$this->sutradara', '$this->produksi', '$this->aktor')";
		$this->hasil = $this->connection->exec($sql);
				
		if($this->hasil)
			$this->message ='Data berhasil ditambahkan!';					
		else
			$this->message ='Data gagal ditambahkan!';	
	}
	
	public function UpdateFilm(){
		$sql = "UPDATE film SET judul_film = '$this->judul_film', rilis='$this->rilis', genre='$this->genre', durasi='$this->durasi', detail_film ='$this->detail_film', produser ='$this->produser', penulis ='$this->penulis', sutradara ='$this->sutradara', produksi ='$this->produksi', aktor ='$this->aktor' WHERE id_film = '$this->id_film'";
		$this->hasil = $this->connection->exec($sql);
			
		if($this->hasil)
			$this->message ='Data berhasil diubah!';
		else
			$this->message ='Data gagal diubah!';
	}
		
	public function DeleteFilm(){
		$sql = "DELETE FROM film WHERE id_film=$this->id_film";
		$this->hasil = $this->connection->exec($sql);

		if($this->hasil)
			$this->message ='Data berhasil dihapus!';								
		else
			$this->message ='Data gagal dihapus!';
	}
	
	public function SelectOneFilm(){
		$sql = "SELECT * FROM film WHERE id_film = '$this->id_film'";
		$result = $this->connection->query($sql);
		
		if($result->rowCount() == 1){
			while ($data = $result->fetch(PDO::FETCH_OBJ))
			{
				$this->id_film = $data->id_film;
				$this->judul_film = $data->judul_film;
				$this->rilis = $data->rilis;
				$this->genre = $data->genre;
				$this->durasi = $data->durasi;
				$this->detail_film = $data->detail_film;
                $this->produser = $data->produser;
				$this->penulis = $data->penulis;
				$this->sutradara = $data->sutradara;
				$this->produksi = $data->produksi;
				$this->aktor = $data->aktor;

			}
		}		
	}
	
	public function SelectAllFilm(){
		//$sql = "SELECT u.*, r.genre FROM film u, genre r WHERE u.genre=r.genreid ORDER BY id_film";
		$sql = "SELECT * FROM film";
		$result = $this->connection->query($sql);
		
		$arrResult = Array();
    }

    public function SearchFilm() {
        $sql = "SELECT * FROM film WHERE judul_film like '%".$kata_cari."%' OR aktor like '%".$kata_cari."%' ORDER BY id ASC";
        $result = $this->connection->query($sql);

        $arrResult = Array();

		$i=0;
		if($result->rowCount() > 0){
			while($data= $result->fetch(PDO::FETCH_OBJ))
			{
				$objFilm = new Film();
				$objFilm->id_film = $data->id_film; 
				$objFilm->judul_film = $data->judul_film;
				$objFilm->rilis = $data->rilis;
				$objFilm->genre=$data->genre;
				$objFilm->durasi=$data->durasai;
				$objFilm->detail_film=$data->detail_film;
				$objFilm->produser=$data->produser;
                $objFilm->penulis=$data->penulis;
                $objFilm->sutradara=$data->sutradara;
                $objFilm->produksi=$data->produksi;
                $objFilm->aktor=$data->aktor;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}

    public function SelectAllFilmByFilmid($currentuserid){
		if ($currentuserid == NULL)
			$sql = "SELECT * FROM film WHERE id_film IS NULL";
		else
			$sql = "SELECT * FROM film WHERE id_film = $currentuserid";				
		$result = $this->connection->query($sql);
			
		$arrResult = Array();
		$cnt=0;
		if($result->rowCount() > 0){				
			while ($data= $result->fetch(PDO::FETCH_OBJ))
			{
				$objfilm = new Film();
				$objfilm->id_film = $data->id_film;
				$objfilm->judul_film = $data->judul_film;
				$objfilm->rilis = $data->rilis;
				$objfilm->genre=$data->genre;
				$objfilm->detail_film=$data->detail_film;
				$objfilm->durasi=$data->durasi;
				$objfilm->produser=$data->produser;
                $objfilm->penulis=$data->penulis;
				$objfilm->sutradara=$data->sutradara;
                $objfilm->produksi=$data->produksi;
				$objfilm->aktor=$data->aktor;
                $objfilm->genreid = $data->genreid;
				$arrResult[$cnt] = $objfilm;
				$cnt++;
			}
		}
		return $arrResult;
	}
    
    public function SelectAllFilmByFilmid($currentuserid){
		if ($currentuserid == NULL)
			$sql = "SELECT * FROM film WHERE id_film IS NULL";
		else
			$sql = "SELECT * FROM film WHERE id_film = $currentuserid";				
		$result = $this->connection->query($sql);
			
		$arrResult = Array();
		$cnt=0;
		if($result->rowCount() > 0){				
			while ($data= $result->fetch(PDO::FETCH_OBJ))
			{
				$objfilm = new Film();
				$objfilm->id_film = $data->id_film;
				$objfilm->judul_film = $data->judul_film;
				$objfilm->rilis = $data->rilis;
				$objfilm->genre=$data->genre;
				$objfilm->detail_film=$data->detail_film;
				$objfilm->durasi=$data->durasi;
				$objfilm->produser=$data->produser;
                $objfilm->penulis=$data->penulis;
				$objfilm->sutradara=$data->sutradara;
                $objfilm->produksi=$data->produksi;
				$objfilm->aktor=$data->aktor;
                $objfilm->genreid = $data->genreid;
				$arrResult[$cnt] = $objfilm;
				$cnt++;
			}
		}
		return $arrResult;
	}
}
?>
