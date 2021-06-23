<?php  
	include('connection.php');
	$id = $_POST['id'];
	$sector = $_POST['sec'];
	$suprafata = $_POST['sup'];
	$etaj = $_POST['et'];
	$nrodaie = $_POST['nr_odai'];
	$pret = $_POST['price'];
	$adresa = $_POST['ad'];
	$descriere = $_POST['desc'];
	$img_url = $_POST['img'];
	
	$modificare = mysqli_query($conexiune, "UPDATE vanzari SET id='$id[0]', sector='$sector[0]', suprafata='$suprafata[0]' , etaj='$etaj[0]' ,nr_odaie='$nrodaie[0]' , pret='$pret[0]', adresa='$adresa[0]', descriere='$descriere[0]', img_ap='$img_url[0]'  where id='$id[0]'") or die(mysqli_error());

	header("location: index.php");
?>