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
	private $tanggal_upload = '';
	private $nama_genre = '';
	private $nama_aktor = '';
	private $film_id = '';
	private $aktor_id = '';
	private $genre_id = '';
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
		$sql = "INSERT INTO film(filmid, poster_film, judul_film, detail_film, rilis_film, rating_film, director_film, writer_film, durasi_film, file_film, tanggal_upload) 
				VALUES (:filmid, :poster_film, :judul_film, :detail_film, :rilis_film, :rating_film, :director_film, :writer_film, :durasi_film, :file_film, :tanggal_upload)";

		$stmt = $this->connection->prepare($sql);
		$stmt->bindParam(':filmid', $this->filmid);
		$stmt->bindParam(':poster_film', $this->poster_film);
		$stmt->bindParam(':judul_film', $this->judul_film);
		$stmt->bindParam(':detail_film', $this->detail_film);
		$stmt->bindParam(':rilis_film', $this->rilis_film);
		$stmt->bindParam(':rating_film', $this->rating_film);
		$stmt->bindParam(':director_film', $this->director_film);
		$stmt->bindParam(':writer_film', $this->writer_film);
		$stmt->bindParam(':durasi_film', $this->durasi_film);
		$stmt->bindParam(':file_film', $this->file_film);
		$stmt->bindParam(':tanggal_upload', $this->tanggal_upload);

		if ($stmt->execute()) {
			$this->hasil = true;
			$this->message = 'Data berhasil ditambahkan!';
		} else {
			$this->hasil = false;
			$this->message = 'Data gagal ditambahkan!';
		}
	}
	public function AddFilmAktor()
	{
		$filmID = $this->film_id;
		$aktorIDs = $this->aktor_id;

		$insertSql = "INSERT INTO film_aktor (film_id, aktor_id) VALUES (:film_id, :aktor_id)";
		$insertStmt = $this->connection->prepare($insertSql);

		foreach ($aktorIDs as $aktorID) {
			$insertStmt->bindValue(':film_id', $filmID);
			$insertStmt->bindValue(':aktor_id', $aktorID);
			$result = $insertStmt->execute();
			if (!$result) {
				$this->hasil = false;
				return;
			}
		}

		$this->hasil = true;
		$this->message = 'Data berhasil ditambahkan!';
	}

	public function AddFilmGenre()
	{
		$filmID = $this->film_id;
		$genreIDs = $this->genre_id;

		$insertSql = "INSERT INTO film_genre (film_id, genre_id) VALUES (:film_id, :genre_id)";
		$insertStmt = $this->connection->prepare($insertSql);

		foreach ($genreIDs as $genreID) {
			$insertStmt->bindValue(':film_id', $filmID);
			$insertStmt->bindValue(':genre_id', $genreID);
			$result = $insertStmt->execute();
			if (!$result) {
				$this->hasil = false;
				return;
			}
		}

		$this->hasil = true;
		$this->message = 'Data berhasil ditambahkan!';
	}
	public function UpdateFilm()
	{
		$sql = "UPDATE film SET poster_film = :poster_film, judul_film = :judul_film, detail_film = :detail_film, rilis_film = :rilis_film, 
				rating_film = :rating_film, director_film = :director_film, writer_film = :writer_film, durasi_film = :durasi_film, 
				file_film = :file_film, tanggal_upload = :tanggal_upload WHERE filmid = :filmid";

		$stmt = $this->connection->prepare($sql);
		$stmt->bindParam(':poster_film', $this->poster_film);
		$stmt->bindParam(':judul_film', $this->judul_film);
		$stmt->bindParam(':detail_film', $this->detail_film);
		$stmt->bindParam(':rilis_film', $this->rilis_film);
		$stmt->bindParam(':rating_film', $this->rating_film);
		$stmt->bindParam(':director_film', $this->director_film);
		$stmt->bindParam(':writer_film', $this->writer_film);
		$stmt->bindParam(':durasi_film', $this->durasi_film);
		$stmt->bindParam(':file_film', $this->file_film);
		$stmt->bindParam(':tanggal_upload', $this->tanggal_upload);
		$stmt->bindParam(':filmid', $this->filmid);

		if ($stmt->execute()) {
			$this->hasil = true;
			$this->message = 'Data berhasil diubah!';
		} else {
			$this->hasil = false;
			$this->message = 'Data gagal diubah!';
		}
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
	public function getMaxFilmID()
	{
		$sql = 'SELECT MAX(filmid) AS max_filmid, MAX(judul_film) AS max_judulfilm FROM film';
		$result = $this->connection->query($sql);

		if ($result && $result->rowCount() == 1) {
			$row = $result->fetch(PDO::FETCH_ASSOC);
			$maxFilmID = $row['max_filmid'];
			$maxFilmName = $row['max_judulfilm'];
			return array($maxFilmID, $maxFilmName);
		} else {
			return array(0, '');
		}
	}
	public function SelectOneFilm()
	{
		$sql = 'SELECT f.*, GROUP_CONCAT(DISTINCT g.nama_genre) AS nama_genre, 
        GROUP_CONCAT(DISTINCT a.nama_aktor) AS nama_aktor
        FROM film f
        JOIN film_genre fg ON f.filmid = fg.film_id
        JOIN genre g ON fg.genre_id = g.genreid
        JOIN film_aktor fa ON f.filmid = fa.film_id
        JOIN aktor a ON fa.aktor_id = a.aktorid
        WHERE f.filmid = ' . $this->filmid . ' GROUP BY f.filmid;';
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
				$this->tanggal_upload = $data->tanggal_upload;
				$this->nama_aktor = explode(',', $data->nama_aktor);
				$this->nama_genre = explode(',', $data->nama_genre);
			}
		}
	}
	public function SelectOneFilmByFilmId($selectfilmid)
	{
		$sql = 'SELECT * FROM film WHERE filmid=' . $selectfilmid . '';
		$result = $this->connection->query($sql);

		if ($result->rowCount() == 1) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$this->filmid = $data->filmid;
				$this->judul_film = $data->judul_film;
			}
		}
	}

	public function SelectAllFilm()
	{
		$sql = "SELECT * FROM film ORDER BY filmid";
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
				$objFilm->tanggal_upload = $data->tanggal_upload;
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
				$objFilm->tanggal_upload = $data->tanggal_upload;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}

	public function SelectAllFilmByGenre($selectgenre)
	{
		$sql = 'SELECT f.*, g.nama_genre FROM film f JOIN film_genre fg ON f.filmid = fg.film_id JOIN genre g ON fg.genre_id = g.genreid
		WHERE g.nama_genre LIKE "%' . $selectgenre . '%" ORDER BY f.judul_film ASC;';
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
				$objFilm->tanggal_upload = $data->tanggal_upload;
				$objFilm->nama_genre = $data->nama_genre;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}

	public function SelectAllFilmAktorGenre()
	{
		$sql = 'SELECT f.*, GROUP_CONCAT(DISTINCT g.nama_genre SEPARATOR ", ") AS nama_genre, 
		GROUP_CONCAT(DISTINCT a.nama_aktor SEPARATOR ", ") AS nama_aktor FROM film f 
		JOIN film_genre fg ON f.filmid = fg.film_id 
		JOIN genre g ON fg.genre_id = g.genreid 
		JOIN film_aktor fa ON f.filmid = fa.film_id 
		JOIN aktor a ON fa.aktor_id = a.aktorid GROUP BY f.filmid;';
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
				$objFilm->tanggal_upload = $data->tanggal_upload;
				$objFilm->nama_aktor = $data->nama_aktor;
				$objFilm->nama_genre = $data->nama_genre;
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
				$objFilm->tanggal_upload = $data->tanggal_upload;
				$objFilm->nama_aktor = $data->nama_aktor;
				$arrResult[$i] = $objFilm;
				$i++;
			}
		}
		return $arrResult;
	}
	# Fungsi New film hanya 12 film
	public function SelectNewestFilms($limit = 12)
	{
		$sql = 'SELECT * FROM film ORDER BY rilis_film DESC LIMIT :limit';
		
		$stmt = $this->connection->prepare($sql);
		$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
		$stmt->execute();
		
		$arrResult = array();
		
		while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
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
			$arrResult[] = $objFilm;
		}
		
		return $arrResult;
	}
	# Fungsi rating film hanya 12 film
	public function SelectAllFilmByRating($limit = 12)
	{
		$sql = "SELECT * FROM film ORDER BY rating_film DESC LIMIT :limit";
		
		$stmt = $this->connection->prepare($sql);
		$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
		$stmt->execute();
		
		$arrResult = array();
		
		while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
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
			$arrResult[] = $objFilm;
		}
		
		return $arrResult;
	}
	# Fungsi genre film hanya 12 film
	public function SelectAllFilmRatingByGenre($genre, $limit = 12)
	{
		$sql = "SELECT f.*
				FROM film f
				JOIN film_genre fg ON f.filmid = fg.film_id
				JOIN genre g ON fg.genre_id = g.genreid
				WHERE g.nama_genre = :genre
				ORDER BY f.rating_film DESC
				LIMIT :limit";
		
		$stmt = $this->connection->prepare($sql);
		$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
		$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
		$stmt->execute();
		
		$arrResult = array();
		
		while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
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
			$arrResult[] = $objFilm;
		}
		
		return $arrResult;
	}
}
?>