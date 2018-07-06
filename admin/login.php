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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="css/login.css">
    </head>
    <body>
		<div class="login-page">
			<div class="alert alert-danger alert-invalid">
			</div>
			<a class="btn btn-primary d-flex text-center justify-content-center" href="../index.php">Inicio</a>
			<div class="form">
					<form class="login-form" id="login-form" action="clearance.php" method="post">
					<input type="text" placeholder="username" name="username" id="username"/>
					<input type="password" placeholder="password" name="pass" id="pass"/>
					<button type="submit" name="submit" id="submit">login</button>
				</form>
			</div>
		</div>
		<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/login.js"></script>
    </body>
    </html>