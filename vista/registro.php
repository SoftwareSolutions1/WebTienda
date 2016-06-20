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
</head>
<body>
<header>
	<a href="index.php"><img src="images/Axum_Logo.png" alt="" /></a>
</header>


<h1>Crear cuenta</h1>

	<form action="" method="POST">
	<label for="email">Email </label><br>
	<input type="text" id="email" name="email" placeholder="Ejem: carlos@mail.com" autofocus="autofocus"></input>
	
	<label for="nombre">Nombre</label><br>
	<input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"></input>

	<label for ="apell_pat">Apellido Paterno</label><br>
	<input type="text" id="apell_pat" name="apell_pat"></input>
        
        <label for ="apell_mat">Apellido Materno</label><br>
	<input type="text" id="apell_mat" name="apell_mat" ></input>
        
        <label for ="calle">Calle</label><br>
	<input type="text" id="calle" name="calle" placeholder="Ejem: López Martínez"></input>
        
        <label for ="colonia">Colonia</label><br>
	<input type="text" id="colonia" name="colonia"></input>
        
        <label for ="Cp">Codigo Postal</label><br>
	<input type="text" id="Cp" name="Cp"></input>

        <label for ="ciudad">ciudad</label><br>
	<input type="text" id="ciudad" name="ciudad"></input>

        <label for ="pais">pais</label><br>
	<input type="text" id="pais" name="pais"></input>

        <label for ="nom_tar">Numero de tarjeta</label><br>
	<input type="text" id="nom_tar" name="nom_tar" ></input>

        <label for ="userReg">Nombre de usuario</label><br>
	<input type="text" id="userReg" name="userReg" ></input>        
        
	<label for="password">Contraseña</label><br>
	<input type="password" id="password" name="password"></input>
	
	<input type="checkbox" name="acepto" value="acepto"/>Acepto termino y condiciones
	
	<input type="submit" id="ok" name="ok" value="Completar registro">
</form>

</body>
</html>
