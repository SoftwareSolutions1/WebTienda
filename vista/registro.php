<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/registrarse.css">
	<link rel="stylesheet" type="text/css" href=""stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"">
</head>
<body>
<header>
	<a href="index.php"><img src="images/Axum_Logo.png" alt="" /></a>
</header>


<h1>Crear cuenta</h1>

<div class="container">
	<form action="../controlador/registSys.php" method="POST">
		<div class="form-group">
			<label for="email">Email </label><br>
			<input class="form-control" type="text" id="email" name="email" placeholder="Ejem: carlos@mail.com" autofocus="autofocus"></input>
		</div>
		
		<div class="form-group">
			<label for="nombre">Nombre</label><br>
			<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"></input>
		</div>
	
		<div class="form-group">
			<label for ="apell_pat">Apellido Paterno</label><br>
			<input class="form-control" type="text" id="apell_pat" name="apell_pat"></input>
		</div>
	        
	        <div class="form-group">
	        	<label for ="apell_mat">Apellido Materno</label><br>
	        			<input class="form-control" type="text" id="apell_mat" name="apell_mat" ></input>
	        </div>
	        

	        <div class="form-group">
	        	<label for ="calle">Calle</label><br>
	        			<input class="form-control"  type="text" id="calle" name="calle" placeholder="Ejem: López Martínez"></input>
	        </div>
	        
	        <div class="form-group">
	        	<label for ="colonia">Colonia</label><br>
	        			<input class="form-control"  type="text" id="colonia" name="colonia"></input>
	        </div>
	        
	        <div class="form-group">
	        	<label for ="Cp">Codigo Postal</label><br>
	        			<input class="form-control"  type="text" id="Cp" name="Cp"></input>
	        </div>
	
	        <div class="form-group">
	        	<label for ="ciudad">ciudad</label><br>
	        			<input class="form-control"  type="text" id="ciudad" name="ciudad"></input>
	        </div>
	
	        <div class="form-group">
	        <label for ="pais">pais</label><br>
	        			<input class="form-control" type="text" id="pais" name="pais"></input>
	        		</div>
	        
	        <div class="form-group">
	        	<label for ="nom_tar">Numero de tarjeta</label><br>
	        			<input class="form-control" type="text" id="nom_tar" name="nom_tar" ></input>
	        </div>
	
	        <div class="form-group">
	        	<label for ="userReg">Nombre de usuario</label><br>
	        			<input class="form-control" type="text" id="userReg" name="userReg" ></input>
	        </div>
	        
		<div class="form-group">
			<label for="password">Contraseña</label><br>
			<input class="form-control" type="password" id="password" name="password"></input>
		</div>
		
		<div class="form-group">
		<input type="checkbox" name="acepto" value="acepto"/>Acepto termino y condiciones</div>
		
		<input type="submit" id="ok" name="ok" value="Completar registro">
	</form>
</div>
</body>
</html>
