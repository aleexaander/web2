<?php 

require_once 'View.php';
/**
* 
*/
class UtamaUI extends View
{
	
	public function tampilkanBerita()
	{
		include_once 'model/Berita.php';
		$brt= new Berita();
		$isi_berita = $brt->ambilBerita();

		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>