<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de productos</title>
	<link rel="stylesheet" type="text/css" href="css/alta_productos.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

	
		<form action="" method="POST">
			
			<div class="col-md-6">
				<div class="form-group">
				<div>
					<h3>Registro de Producto</h3>
				</div>
				<br>
			
				
					<label for="id">Código </label>
						<input class="form-control" type="text" id="codigo" name="codigo" placeholder="5432" autofocus="autofocus"></input>
				</div>
						
						
						<div class="form-group">
				<label for="nombre">Nombre</label>
						<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre"></input>
						</div>

				<div class="form-group">
				<label for="cantidad">Cantidad</label>
						<input class="form-control" type="text" id="cantidad" name="cantidad" placeholder="10"></input>
						</div>


				<div class="form-group">
				<label for="descripcion">Descripción</label>
						<input class="form-control" type="text" id="descripcion" name="descripcion" placeholder="text"></input>
						</div>
						
						<div class="col-md-3">
				

				</div>

						<div class="col-md-6">
				<button class="btn btn-xs btn-block btn-default active">Registrar</button>

				</div>
			</div>
		
	
	
	
		<div class="col-md-6">
			
		</div>
	
</body>
</html>