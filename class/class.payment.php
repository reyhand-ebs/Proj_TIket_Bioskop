<?php
class payment extends Connection {
    private $paymentid='';
    private $no_pesanan='';
    private $biaya_admin='';
    private $userid='';
    private $filmid='';
    private $judul_film='';
    private $voucherid='';
    private $harga_film='';
    private $total_harga='';

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

    public function AddPayment(){
		$sql = "INSERT INTO payment(paymnetid, no_pesanan, biaya_admin, userid, filmid, judul_film, voucherid, harga_film, total_harga)
				VALUES (:paymnetid, :no_pesanan, :biaya_admin, :userid, :filmid, :judul_film, :voucherid, :harga_film, :total_harga)";
		$stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':paymentid', $this->paymentid);
        $stmt->bindParam(':no_pesanan', $this->no_pesanan);
        $stmt->bindParam(':biaya_admin', $this->biaya_admin);
        $stmt->bindParam(':userid', $this->userid);
        $stmt->bindParam(':filmid', $this->filmid);
        $stmt->bindParam(':judul_film', $this->judul_film);
        $stmt->bindParam(':voucherid', $this->voucherid);
        $stmt->bindParam(':harga_film', $this->harga_film);
        $stmt->bindParam(':total_harga', $this->total_harga);
				
		if($stmt->execute()) {
            $this->hasil = true;
			$this->message ='Data berhasil ditambahkan!';	
        }				
		else {
            $this->hasil = false;
            $this->message ='Data gagal ditambahkan!';	
        }
	}
}
?>