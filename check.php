<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','youtube');
	$fin = 'SELECT * FROM users WHERE name ="'.$_GET["name"].'" AND password ="'.$_GET["password"].'"';
	$query = mysqli_query($con, $fin);
	$stroka = $query->fetch_assoc();
	if ($query->num_rows == 1) {
		header("Location: home.php?id=". $stroka["id"]);
	}
	else{
		header("Location: index.php?id=". $stroka["id"]);
	}
		 ?>