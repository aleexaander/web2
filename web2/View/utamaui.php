<?php 

require_once 'View.php';
/**
* 
*/
class utamaui extends View
{
	
	public function tampilkanBerita()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>