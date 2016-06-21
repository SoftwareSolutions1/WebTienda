<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/registrarse.css">
</head>
<body>

<h1>Iniciar sesión/Registrarse</h1>
	<div class="container">

	
		<form action="" method="POST">
			
			<div class="col-md-6">
				<div class="form-group">
				<div>
					<h3>Iniciar sesión </h3>
				</div>
				<br>
			
				
					<label for="email">Email: </label>
						<input class="form-control" type="text" id="email" name="email" placeholder="Ejem: carlos@mail.com" autofocus="autofocus"></input>
				</div>
						
						
						<div class="form-group">
				<label for="nombre">Nombre</label>
						<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"></input>
						</div>

						<br>

						<div class="col-md-3">
				

				</div>

						<div class="col-md-6">
				<button class="btn btn-xs btn-block btn-default active">Iniciar Sesión</button>

				</div>
			</div>
		
	
	
	
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="form-group">
				<h3>Registrarse </h3>
					<label for="email">Email: </label>
			<input class="form-control" type="text" id="email" name="email" placeholder="Ejem: carlos@mail.com" autofocus="autofocus"></input>
				</div>
			
			
			<div class="form-group">
				<label for="nombre">Nombre</label>
			<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"></input>
			</div>
			
			
			<div class="form-group">
				<label for ="apellidos">Apellidos</label>
			<input class="form-control" type="text" id="apellidos" name="apellidos" placeholder="Ejem: López Martínez"></input>
			</div>
			
			
			<div class="form-group">
				<label for="password">Contraseña</label>
			<input class="form-control" type="password" id="password" name="password"></input>
			</div>
			
			<br>

						<div class="col-md-3">
				

				</div>

						<div class="col-md-6">
				<button class="btn btn-xs btn-block btn-default active">Registrarse</button>

				</div>
			
				
			</div>
			 
			
			</form>
		</div>
	

</body>
</html>