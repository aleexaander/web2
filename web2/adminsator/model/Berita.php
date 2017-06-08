<?php 

/**
* 
*/

include_once 'Model.php';
class Berita extends Model
{
	public $id_beita;
	public $tanggal;
	public $judul;
	public $isi;
	public $id_kategori;

	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}


public function setBerita($tanggal,$judul,$isi,$id_kategori)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO berita(tanggal,judul,isi,katagori_id) VALUES(:tanggal, :judul, :isi, :id_kategori)");
		   $stmt->bindparam(":tanggal",$tanggal);
		   $stmt->bindparam(":judul",$judul);
		   $stmt->bindparam(":isi",$isi);
		   $stmt->bindparam(":katagori_id",$katagori_id);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	public function ambilBeritaSpesifik(id){


	}
	public function ubahBerita(id_beita, tanggal, isi, id_kategori){

		
	}
}

 ?>