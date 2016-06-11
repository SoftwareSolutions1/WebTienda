<?php
	session_start();
	session_destroy();
?>

<html>
<head>
	<meta charset = "UTF-8">
	<title>Inicio</title>
	<link href = "css/login.css" rel = "stylesheet" type = "text/css">
</head>
<body>

<section id= "formulario">
	<center>
			<h1>Iniciar Sesión<h1>
			<br><br>
			<div class = "login">
			<form action = "../controlador/loginSys.php" method = "POST">

			<fieldset>
				<legend>Login</legend>

				<p>
						<input type = "text" name = "userLogin" placeholder = "Usuario" title = "Se nesecita un usuario" required>
				</p>

				<p>
						<input type = "password" name = "passLogin" placeholder = "Contraseña" title = "Se nesecita una contraseña" required>
				</p>
				<p>
						<input type = "submit" value = "Entrar">
						<input type = "reset" value ="Limpiar">
				</p>

				<p>
				<a href = "crear.html">
					Crear Cuenta
				</a>
				</p>



			</fieldset>
			</form>
			</div>


	</center>
</section>
</body>
</html>