<?php
include 'connection.php';
$sql = mysqli_query($conexiune, "SELECT * FROM vanzari");
while($row = mysqli_fetch_row($sql)){
	echo "<div class='block'>";
	echo "<div class='img'><img src='$row[8]'></div>";
	echo "<div class='price'>$row[5] €</div>";
	echo "<div class='surface'>$row[2] <span class='metre'>m<sup>2</sup></span></div><br>";
	echo "<div>Apartament $row[6], $row[1]</div>";
	echo "<a href='change.php?id=$row[0]'>Editare</a>";
	echo "</div>";
}

mysqli_close($conexiune);
?>