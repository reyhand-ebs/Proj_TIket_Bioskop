<?php

class Aktor extends Connection
{
	private $aktorid = '';
	private $nama_aktor = '';
    private $foto_aktor = '';
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

	public function AddAktor()
	{
		$sql = "INSERT INTO aktor(aktorid, nama_aktor, foto_aktor) VALUES (:aktorid, :nama_aktor, :foto_aktor)";
	
		$stmt = $this->connection->prepare($sql);
		$stmt->bindParam(':aktorid', $this->aktorid);
		$stmt->bindParam(':nama_aktor', $this->nama_aktor);
		$stmt->bindParam(':foto_aktor', $this->foto_aktor);
	
		if ($stmt->execute()) {
			$this->hasil = true;
			$this->message = 'Data berhasil ditambahkan!';
		} else {
			$this->hasil = false;
			$this->message = 'Data gagal ditambahkan!';
		}
	}

	public function UpdateAktor()
	{
		$sql = "UPDATE aktor SET nama_aktor ='$this->nama_aktor', foto_aktor ='$this->foto_aktor' WHERE aktorid = $this->aktorid";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil diubah!';
		else
			$this->message = 'Data gagal diubah!';
	}

	public function DeleteAktor()
	{
		$sql = "DELETE FROM aktor WHERE aktorid = $this->aktorid";
		$this->hasil = $this->connection->exec($sql);

		if ($this->hasil)
			$this->message = 'Data berhasil dihapus!';
		else
			$this->message = 'Data gagal dihapus!';
	}

	public function getMaxAktorID() {
        // Kode untuk mengambil UserID terbesar dari tabel pengguna (user)
        $sql = 'SELECT MAX(aktorid) AS max_aktorid FROM aktor'; // Ganti "pengguna" dengan nama tabel yang sesuai
		$result = $this->connection->query($sql);

		if ($result && $result->rowCount() == 1) {
			$row = $result->fetch(PDO::FETCH_ASSOC);
			$maxAktorID = $row['max_aktorid'];
			return $maxAktorID;
		} else {
			return 0; // Jika tidak ada hasil atau terdapat lebih dari 1 baris, kembalikan 0 atau nilai yang sesuai
		}
    }

	public function SelectOneAktor()
	{
		$sql = "SELECT * FROM aktor WHERE aktorid = $this->aktorid";
		$result = $this->connection->query($sql);

		if ($result->rowCount() == 1) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$this->aktorid = $data->aktorid;
				$this->nama_aktor = $data->nama_aktor;
                $this->foto_aktor = $data->foto_aktor;
			}
		}
	}

	public function SelectOneAktorbyAktorid($selectaktor)
	{
		if ($selectaktor == NULL)
			$sql = "SELECT * FROM aktor WHERE aktorid IS NULL";
		else
			$sql = "SELECT * FROM aktor WHERE aktorid = $selectaktor";
		$result = $this->connection->query($sql);

		if ($result->rowCount() == 1) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objAktor = new Aktor();
				$objAktor->aktorid = $data->aktorid;
				$objAktor->nama_aktor = $data->nama_aktor;
                $objAktor->foto_aktor = $data->foto_aktor;
			}
		}
	}
	
	public function SelectAllAktor()
	{
		$sql = "SELECT * FROM aktor ORDER BY aktorid ASC";
		$result = $this->connection->query($sql);

		$arrResult = array();
		$i = 0;
		if ($result->rowCount() > 0) {
			while ($data = $result->fetch(PDO::FETCH_OBJ)) {
				$objAktor = new Aktor();
				$objAktor->aktorid = $data->aktorid;
				$objAktor->nama_aktor = $data->nama_aktor;
                $objAktor->foto_aktor = $data->foto_aktor;
				$arrResult[$i] = $objAktor;
				$i++;
			}
		}
		return $arrResult;
	}
}
?>