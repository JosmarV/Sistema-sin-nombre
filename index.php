﻿<?php  
	session_start();
	if (isset($_SESSION['usuario'])) {
		header("Location:home.php");
		die();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SINE: Pagina de Inicio</title>
		<link rel="stylesheet" href="css/styleIndex.css">
	</head>
	<body style= "background-image:url(img/imagen8.jpg) ">
		<div class="transparencia">
			<header>
				<ul class="menu">  
					<li class="logo"><a href="#" alt="SINE"><img src="img/logoFinal.png"></a> </li>
					<li class="items"><a href="#">Estadisticas</a></li>
					<li class="items"><a href="login.php">Iniciar Sesión</a></li>
				</ul>
			</header>
			
			<div class="contenedor">
				<section class="bienvenido">
					<h1> Bienvenidos a SINE </h1>
					<p>Para editar o actualizar la informacion debe</p>
					<div class="boton">
						<a class="inicio" href="login.php">Iniciar sesión</a>
					</div>

				</section>
					
				<footer>
					<p>Ingeniera de Sistemas &copy;2020</p>
					<p>Version 0.1</p>
				</footer>
			</div>
		</div>	
		
		
	</body>
</html>