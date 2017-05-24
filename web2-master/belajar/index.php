<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penggabungan</title>
</head>
<body>
	<h1>Judul Halaman</h1>

	<?php 
		include 'tabel.php'; //walau tidak ada filenya, tetap dijalankan
		require 'gambar.php'; //jika tidak ada filenya langsung stop, dibawahnya tidak akan dijalnkan
	 ?>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam culpa eius deleniti illum, debitis maxime eligendi natus, ipsa neque pariatur beatae laboriosam vel suscipit officiis maiores explicabo iste ex sunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aspernatur ab, sed commodi facere, rem soluta et id qui vero, delectus recusandae voluptas consectetur. Perspiciatis animi laboriosam inventore voluptatum non.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ad assumenda voluptatibus explicabo voluptatum numquam natus molestiae. Veniam delectus quia dicta nulla ipsam, animi ullam quaerat nam officia vitae, ipsum?lorem</p>

	<?php 
		include_once 'tabel.php';
	 ?>
	 
</body>
</html>