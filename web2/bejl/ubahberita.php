<?php 

	$id = $_GET ['id'];

	$host 		= 'localhost';
	$dbname 	= 'sisfonew';
	$username 	= 'root';
	$password 	= '';
	$db = '';

	try {
		$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $exception){
			die("Connection error: " . $exception->getMessage());
	}

	$judul		=$_POST['judul'];
	$isi		=$_POST['isi'];
	$katagori=$_POST['katagori'];
	$sql="UPDATE berita SET judul='$judul', isi='$isi', katagori_id='$katagori' WHERE id_berita='$id'";
	
	try {
		$stmt = $db->prepare($sql);
			$stmt->execute(); //eksekusi
			echo "Berita Berhasil Diubah";
		}
		catch(PDOException $e) {
			echo "Berita Gagal Diubah";
			echo $e->getMessage(); 
		}

?>