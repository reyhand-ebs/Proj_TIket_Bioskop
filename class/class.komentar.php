<?php
	class Komentar extends Connection {
		//private $deskripsi = '';
		//private $tanggal = '';
		//private $nama = '';
		//private $rating = '';
		//private $id_user = '';
		//private $userid = '';
		private $film_id = '';
		private $rating = '';
		private $komen_user = '';
		private $user_id = '';
		private $name = '';
		private $hasil = false;
		private $message = '';


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


		public function AddKomentar()
{
    $sql = "INSERT INTO film_user (film_id, rating, komen_user, user_id) 
            VALUES (:film_id, :rating, :komen_user, :user_id)";
    $query = $this->connection->prepare($sql);
    $query->bindParam(':rating', $this->rating);
    $query->bindParam(':komen_user', $this->komen_user);
    $query->bindParam(':user_id', $this->user_id);
	$query->bindParam(':film_id', $this->film_id);

    if ($query->execute()) {
        $this->hasil = true;
        $this->message = 'Data berhasil ditambahkan';
    } else {
        $this->hasil = false;
        $this->message = 'Data gagal ditambahkan';
    }
}







		//public function AddKomentar(){
			//$sql = "INSERT INTO topik(deskripsi,nama,rating)
					//VALUES ('$this->deskripsi','$this->nama', '$this->rating')";
			//$this->hasil = $this->connection->exec($sql);
					
			//if($this->hasil)
				//$this->message ='Data berhasil ditambahkan!';					
			//else
				//$this->message ='Data gagal ditambahkan!';	
		//}
		
		public function UpdateKomentar(){
			$sql = "UPDATE user SET email = '$this->email', name='$this->name', nohp='$this->nohp' WHERE userid = '$this->userid'";
			$this->hasil = $this->connection->exec($sql);
				
			if($this->hasil)
				$this->message ='Data berhasil diubah!';
			else
				$this->message ='Data gagal diubah!';
		}


		//public function SelectAllKomentar()
		//{
			//$sql = "SELECT film_user.*, user.name FROM film_user 
			//INNER JOIN user ON film_user.user_id = user.userid
			//WHERE film_user.user_id = :user_id
			//UNION 
			//SELECT film_user.*, NULL AS name FROM film_user 
			//JOIN ON film.filmid =film_user.film_id
			//WHERE film_user.film_id = :film_id ";
			//$result = $this->connection->query($sql);

			//$arrResult = array();
			//$i = 0;
			//if($result->rowCount() > 0)
			//{
				//while($data = $result->fetch(PDO::FETCH_OBJ))
				//{
					//$objKomentar = new Komentar();
					//$objKomentar->film_id = $data->film_id;
					///$objKomentar->rating_user = $data->rating_user;
					//$objKomentar->komen_user = $data->komen_user;
					//$objKomentar->user_id = $data->user_id;
					//$objKomentar->name = $data->name;
					//$arrResult[$i] = $objKomentar;
					//$i++;
					
				//}
			//}
			//return $arrResult;


		//}
		public function SelectOneKomentar($user_id, $film_id)
{
    $sql = "SELECT film_user.*, user.name FROM film_user 
            INNER JOIN user ON film_user.user_id = user.userid
            WHERE film_user.user_id = :user_id
            UNION 
            SELECT film_user.*, NULL AS name FROM film_user 
            INNER JOIN film ON film.filmid = film_user.film_id
            WHERE film_user.film_id = :film_id";

    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':film_id', $film_id);
    $stmt->execute();

    //$arrResult = array();
    //$i = 0;
    if ($stmt->rowCount() == 1) {
        while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
            //$objKomentar = new Komentar();
            //$objKomentar->film_id = $data->film_id;
            //$objKomentar->rating_user = $data->rating_user;
            //$objKomentar->komen_user = $data->komen_user;
            //$objKomentar->user_id = $data->user_id;
            //$objKomentar->name = $data->name;
            //$arrResult[$i] = $objKomentar;
            //$i++;
			$this->film_id = $data->film_id;
			$this->komen_user = $data->komen_user;
			$this->rating = $data->rating;
			$this->user_id = $data->user_id;
			$this->name = $data->name;
        }
    }
    //return $arrResult;
}



		public function SelectAllKomentar(){
			//$sql = "SELECT u.*, r.genre FROM film u, genre r WHERE u.genre=r.genreid ORDER BY id_film";
			$sql = "SELECT * FROM film_user";
			$result = $this->connection->query($sql);
			
			$arrResult = Array();
			$i=0;
			if($result->rowCount() > 0){
				while($data= $result->fetch(PDO::FETCH_OBJ))
				{
					$objKomentar = new Komentar();
					$objKomentar->film_id = $data->film_id;
					//$objKomentar->nama = $data->nama;
					$objKomentar->rating = $data->rating;
					$objKomentar->komen_user = $data->komen_user;
					$objKomentar->user_id = $data->user_id;
					//$objfilm->genreid = $data->genreid;
					$arrResult[$i] = $objKomentar;
					$i++;
				}
			}
			return $arrResult;
		}


		



		//public function AddKomentar(){
			//$sql = "INSERT INTO topik(deskripsi, tanggal, id_user)
					//VALUES ('$this->deskripsi','$this->now()', '$this->id_user')";
			//$hasil = $this->connection->prepare($sql);
			
			//$hasil->bindParam('deskripsi', $_POST['deskripsi']);
			//$hasil->bindParam('id_user', $_SESSION['user']['userid']);
			//$hasil->bindParam('deskripsi', $_POST['deskripsi']);

			//try{
				//$hasil->execute();
				//echo "Data Berhasil Ditambahkan";
			//}catch(PDOException $e){
				//die("Terjadi kesalahan". $e->getMessage());
			//}


			
				
			
		//}
		
		//public function UpdateProfil(){
			//$sql = "UPDATE user SET email = '$this->email', name='$this->name', nohp='$this->nohp' WHERE userid = '$this->userid'";
			//$this->hasil = $this->connection->exec($sql);
				
			//if($this->hasil)
				//$this->message ='Data berhasil diubah!';
			//else
				//$this->message ='Data gagal diubah!';
		//}
			
		//public function DeleteProfil(){
			//$sql = "DELETE FROM user WHERE userid=$this->userid";
			//$this->hasil = $this->connection->exec($sql);
	
			//if($this->hasil)
				//$this->message ='Data berhasil dihapus!';								
			//else
				//$this->message ='Data gagal dihapus!';
		//}
	
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
		
		//public function SelectOneProfil(){
			//$sql = "SELECT * FROM user WHERE userid = '$this->userid'";
			//$result = $this->connection->query($sql);
			
			//if($result->rowCount() == 1){
				//while ($data = $result->fetch(PDO::FETCH_OBJ))
				//{
					//$this->userid = $data->userid;
					//$this->email = $data->email;
					//$this->password = $data->password;
					//$this->name = $data->name;
					//$this->nohp = $data->nohp;
					//$this->idrole = $data->idrole;
				//}
			//}		
		//}
		
		//public function SelectAllProfil(){
			//$sql = "SELECT u.*, r.role FROM user u, role r WHERE u.idrole=r.idrole ORDER BY userid";
			//$sql = "SELECT * FROM user"; 
			//$result = $this->connection->query($sql);
			
			//$arrResult = Array();
			//$i=0;
			//if($result->rowCount() > 0){
				//while($data= $result->fetch(PDO::FETCH_OBJ))
				//{
					//$objUser = new Profil();
					//$objUser->userid = $data->userid;
					//$objUser->email = $data->email;
					//$objUser->password = $data->password;
					//$objUser->name=$data->name;
					//$objUser->nohp=$data->nohp;
					//$objUser->idrole=$data->idrole;
					//$objUser->role=$data->role;
					//$arrResult[$i] = $objUser;
					//$i++;
				//}
			//}
			//return $arrResult;
		//}
		
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