<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Roboto', sans-serif;
		}

		caption{
			font-size: 20px;
			margin-bottom: 25px;
		}

		table{
			width: 750px;
			margin: 30px auto 0;
			border-radius: 12px;
			-webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.75);
		}

		table td{
			font-size: 17px;
		}

		td{
			position: relative;
			padding: 6px 12px;
		}

		td:nth-child(2n){
			text-align: right;
		}

		input{
			font-size: 17px;
			padding: 6px 12px;
		}

		td > input{
			width: 100%;
		}

		th{
			height: 70px;
		}

		tr:last-child td{
			text-align: center;
		}

		.btn{
			font-weight: 500;
			border: none;
			background-color: white;
			-webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.75);
			margin: 0 10px;
			border-radius: 12px;
		}

		.btn:hover{
			-webkit-box-shadow: 0px 0px 15px 5px rgba(0	,0,0,0.75);
			-moz-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.75);
		}

		.submit{
			cursor: pointer;
		}

		.back{
			padding: 6px 12px;
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
	<form method="post" action="SaveEdit.php">
		<?php  
		include('connection.php');
		$id = $_GET['id'];

		$modificare = mysqli_query($conexiune, "SELECT * FROM vanzari where id='$id'");
		while($row = mysqli_fetch_array($modificare)){
			?>
			<table border="0" cellspacing="0">
				<caption>Modificare inregistrarii</caption>
				<tr>
					<td>Sectorul</td>
					<td>
						<input type="hidden" name=id[] value="<?php echo  $row['id'] ?>">
						<input type="text" name=sec[] value="<?php echo  $row['1'] ?>"></td>
				</tr>
				<tr>
					<td>Suprafata</td>
					<td><input type="text" name=sup[] value="<?php echo  $row['2'] ?>"></td>
				</tr>
				<tr>
					<td>Etajul</td>
					<td><input type="text" name=et[] value="<?php echo  $row['3'] ?>"></td>
				</tr>
				<tr>
					<td>Numarul de odai</td>
					<td><input type="text" name=nr_odai[] value="<?php echo  $row['4'] ?>"></td>
				</tr>
				<tr>
					<td>Pretul</td>
					<td><input type="text" name=price[] value="<?php echo  $row['5'] ?>"></td>
				</tr>
				<tr>
					<td>Adresa</td>
					<td><input type="data" name=ad[] value="<?php echo  $row['6'] ?>"></td>
				</tr>
				<tr>
					<td>Descrierea</td>
					<td><input type="text" name=desc[] value="<?php echo  $row['7'] ?>" onkeypress="return /[f,m]/i.test(event.key)" maxlength="1"></td>
				</tr>
				<tr>
					<td>Imaginea</td>
					<td><input type="text" name=img[] value="<?php echo  $row['8'] ?>"></td>
				</tr>
				<tr>
					<th colspan="2"><input type="submit" value="Actualizare" class="btn submit"><a href="index.php" class="btn back">Inapoi</a></th>
				</tr>
			</table>
			<?php
		}
		mysqli_close($conexiune);
		?>
	</form>
</body>
</html>