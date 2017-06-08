<?php 

require_once 'View.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}




	public function tampilFormBerita()
	{
		include_once 'controller/BeritaManager.php';
		$bm = new BeritaManager();
		$daftar_kategori = $bm->getDaftarKategori();
		include_once 'pages/formberita.php';
		$this->end();
	}
}

 ?>