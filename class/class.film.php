<?php
class Film extends Connection
{
	private $filmid = '';
	private $poster_film = '';
	private $judul_film = '';
	private $detail_film = '';
	private $rilis_film = '';
	private $rating_film = '';
	private $director_film = '';
	private $writer_film = '';
	private $durasi_film = '';
	private $file_film = '';
	private $nama_aktor = '';
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
	public function AddFilm()
	{
		$sql = "INSERT INTO film(poster_film, judul_film, detail_film, rilis_film, rating_film, director_film, writer_film, durasi_film, file_film) 
		VALUES ('$this->poster_film', '$this->judul_film', '$this->detail_film', '$this->rilis_film', '$this->rating_film, '$this->director_film', 
		'$this->writer_film', '$this->durasi_film', '$this->file_film')";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil ditambahkan!';
		else
			$this->message = 'Data gagal ditambahkan!';
	}
	public function UpdateFilm()
	{
		$sql = "UPDATE film SET poster_film = '$this->poster_film', judul_film = '$this->judul_film', detail_film = '$this->detail_film', 
		rilis_film = '$this->rilis_film', rating_film = '$this->rating_film', director_film = '$this->director_film', writer_film = '$this->writer_film', 
		durasi_film = '$this->durasi_film, file_film = '$this->file_film'";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil diubah!';
		else
			$this->message = 'Data gagal diubah!';
	}

	public function DeleteFilm()
	{
		$sql = "DELETE FROM film WHERE filmid = $this->filmid";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil dihapus!';
		else
			$this->message = 'Data gagal dihapus!';
	}

	public function SelectOneFilm()
	{
		$sql = "SELECT * FROM film WHERE filmid = '$this->filmid'";
		$result = $this->connection->query($sql);

		if ($result->rowCount() == 1) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$this->filmid = $data->filmid;
				$this->poster_film = $data->poster_film;
				$this->judul_film = $data->judul_film;
				$this->detail_film = $data->detail_film;
				$this->rilis_film = $data->rilis_film;
				$this->rating_film = $data->rating_film;
				$this->director_film = $data->director_film;
				$this->writer_film = $data->writer_film;
				$this->durasi_film = $data->durasi_film;
				$this->file_film = $data->file_film;
			}
		}
	}

	public function SelectAllFilm()
	{
		$sql = "SELECT * FROM film ORDER BY judul_film";
		$result = $this->connection->query($sql);

		$arrResult = array();
		$i = 0;
		if ($result->rowCount() > 0) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objFilm = new Film();
				$objFilm->filmid = $data->filmid;
				$objFilm->poster_film = $data->poster_film;
				$objFilm->judul_film = $data->judul_film;
				$objFilm->detail_film = $data->detail_film;
				$objFilm->rilis_film = $data->rilis_film;
				$objFilm->rating_film = $data->rating_film;
				$objFilm->director_film = $data->director_film;
				$objFilm->writer_film = $data->writer_film;
				$objFilm->durasi_film = $data->durasi_film;
				$objFilm->file_film = $data->file_film;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}

	public function SelectAllFilmDescRating()
	{
		$sql = "SELECT * FROM film ORDER BY rating_film DESC";
		$result = $this->connection->query($sql);

		$arrResult = array();
		$i = 0;
		if ($result->rowCount() > 0) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objFilm = new Film();
				$objFilm->filmid = $data->filmid;
				$objFilm->poster_film = $data->poster_film;
				$objFilm->judul_film = $data->judul_film;
				$objFilm->detail_film = $data->detail_film;
				$objFilm->rilis_film = $data->rilis_film;
				$objFilm->rating_film = $data->rating_film;
				$objFilm->director_film = $data->director_film;
				$objFilm->writer_film = $data->writer_film;
				$objFilm->durasi_film = $data->durasi_film;
				$objFilm->file_film = $data->file_film;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}

	public function SelectAllFilmByGenre($selectgenre) {
		$sql = 'SELECT f.*, g.nama_genre FROM film f JOIN film_genre fg ON f.filmid = fg.film_id JOIN genre g ON fg.genre_id = g.genreid
		WHERE g.nama_genre LIKE "%'.$selectgenre.'%";';
		$result = $this->connection->query($sql);

		$arrResult = array();

		$i = 0;
		if ($result->rowCount() > 0) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objFilm = new Film();
				$objFilm->filmid = $data->filmid;
				$objFilm->poster_film = $data->poster_film;
				$objFilm->judul_film = $data->judul_film;
				$objFilm->detail_film = $data->detail_film;
				$objFilm->rilis_film = $data->rilis_film;
				$objFilm->rating_film = $data->rating_film;
				$objFilm->director_film = $data->director_film;
				$objFilm->writer_film = $data->writer_film;
				$objFilm->durasi_film = $data->durasi_film;
				$objFilm->file_film = $data->file_film;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}

	public function SearchFilm($katacari)
	{
		$sql = "SELECT f.*, a.nama_aktor FROM film f JOIN film_aktor fa ON f.filmid = fa.film_id JOIN aktor a ON fa.aktor_id = a.aktorid
		WHERE a.nama_aktor LIKE '%$katacari%' OR f.judul_film LIKE '%$katacari%';";
		$result = $this->connection->query($sql);

		$arrResult = array();

		$i = 0;
		if ($result->rowCount() > 0) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objFilm = new Film();
				$objFilm->filmid = $data->filmid;
				$objFilm->poster_film = $data->poster_film;
				$objFilm->judul_film = $data->judul_film;
				$objFilm->detail_film = $data->detail_film;
				$objFilm->rilis_film = $data->rilis_film;
				$objFilm->rating_film = $data->rating_film;
				$objFilm->director_film = $data->director_film;
				$objFilm->writer_film = $data->writer_film;
				$objFilm->durasi_film = $data->durasi_film;
				$objFilm->file_film = $data->file_film;
				$objFilm->nama_aktor = $data->nama_aktor;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}
}
?>