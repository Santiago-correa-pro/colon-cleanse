<?php 
session_start();
?>

<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Santiago Correa">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="H2O, COLON, LIMPIEZA,COLONTERAPIA,ESTREÑIMIENTO,CANSANCIO,DOLOR DE CABEZA, ACNE, ALTA PRESION, COLICOS MENSTRUALES,German Castillo, ND">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
        <title>H2O Colon Cleanse</title>
		<!-- CSS -->
		<link rel="stylesheet" href="css/login.css">
    </head>
    <body>
		<div class="login-page">
			<div class="form">
					<form class="login-form" action="clearance.php" method="POST">
					<input type="text" placeholder="username" name="user"/>
					<input type="password" placeholder="password" name="pass"/>
					<button type="submit" name="submit">login</button>
				</form>
			</div>
		</div>
		<script src="login.js"></script>
    </body>
    </html>