
<?php
$host = "localhost";
$dbname = "sisfonew";
$username = "root";
$password = "";
$db = "";
try {
$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
die("Connection error: ".$exception->getMessage());
}

$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll();

?>

<table border="1">
<tr>
	<th>id</th>
	<th>tanggal</th>
	<th>judul</th>
	</tr>
	<tr>

<?php
foreach ($data as $ib) {  ?>
<td align="center"><?php echo $ib['id_berita']?></td>
<td ><?php echo $ib['tanggal']?></td>
<td ><?php  echo $ib['judul']?></td>
	
</tr>
<?php 
}
?>
</table>