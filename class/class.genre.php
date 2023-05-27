<?php

class Genre extends Connection
{
	private $genreid = '';
	private $nama_genre = '';
	private $hasil = false;
	private $message = '';

	public function __get($atribute)
	{
		if (property_exists($this, $atribute)) {
			return $this->$atribute;
		}
	}

	public function __set($atribut, $value)
	{
		if (property_exists($this, $atribut)) {
			$this->$atribut = $value;
		}
	}
	public function AddGenre()
	{
		$sql = "INSERT INTO genre(nama_genre) VALUES ('$this->nama_genre')";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil ditambahkan!';
		else
			$this->message = 'Data gagal ditambahkan!';
	}

	public function UpdateGenre()
	{
		$sql = "UPDATE genre SET nama_genre ='$this->nama_genre' WHERE genreid = $this->genreid";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil diubah!';
		else
			$this->message = 'Data gagal diubah!';
	}

	public function DeleteGenre()
	{
		$sql = "DELETE FROM genre WHERE genreid = $this->genreid";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil dihapus!';
		else
			$this->message = 'Data gagal dihapus!';
	}

	public function SelectOneGenre()
	{
		$sql = "SELECT * FROM genre WHERE genreid = $this->genreid";
		$result = $this->connection->query($sql);

		if ($result->rowCount() == 1) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objGenre = new Genre();
				$objGenre->genreid = $data->genreid;
				$objGenre->nama_genre = $data->nama_genre;
			}
		}
	}

	public function SelectOneGenrebyGenreid($selectgenre)
	{
		if ($selectgenre == NULL)
			$sql = "SELECT * FROM genre WHERE genreid IS NULL";
		else
			$sql = "SELECT * FROM genre WHERE genreid = $selectgenre";
		$result = $this->connection->query($sql);

		if ($result->rowCount() == 1) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objGenre = new Genre();
				$objGenre->genreid = $data->genreid;
				$objGenre->nama_genre = $data->nama_genre;
			}
		}
	}

	public function SelectAllGenre()
	{
		$sql = "SELECT * FROM genre ORDER BY nama_genre ASC";
		$result = $this->connection->query($sql);

		$arrResult = array();
		$i = 0;
		if ($result->rowCount() > 0) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objGenre = new Genre();
				$objGenre->genreid = $data->genreid;
				$objGenre->nama_genre = $data->nama_genre;
				$arrResult[$i] = $objGenre;
				$i++;
			}
		}
		return $arrResult;
	}
}
?>