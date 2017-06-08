<?php 
$resep = array(	 
			array("buah"=>"Pepaya","banyak"=>"1","tambahan"=>"Kecap"),
			array("buah"=>"Mangga","banyak"=>"3","tambahan"=>"Susu"),
			array("buah"=>"Pisang","banyak"=>"5","tambahan"=>"Cappucino")
		);	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar Echo</title>
</head>
<body>
	<?php 
		foreach ($resep as $r) {
	?>
	<h1>Cara Membuat Jus <?php echo $r['buah']; ?></h1>
	<p>Campurkan <?php echo $r['buah'] ?> Sebanyak <?php echo $r['banyak'] ?> buah, ditambahkan dengan <?php echo $r['tambahan'] ?> untuk memberi rasa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora molestias error quam illo quae quas explicabo possimus minima, in earum ab repellendus veritatis, dolor consequatur et similique fuga ipsa, vtemporibus reiciendis magni voluptates dolor, beatae, iusto asperiores incidunt repellat commodi aut ex, tempora! Tempora deleniti quisquam repellat?</p>
	<?php } ?>
</body>
</html>