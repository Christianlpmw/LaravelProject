<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Juegos</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body>
		{{--formulario que te manda al inicio, y se utiliza un multipart para subir imagenes--}}
		<form method="POST" class="col s12 m8 l6 offset-m2 offset-l3" action="/carac" id="formulario" >
			@csrf{{--seguridad dentro del formulario--}}
			
			<div class="">
				<label for="Empresa">Empresa</label>
				<input type="text" name="Empresa" id="empresa"/>
			</div>
			<div class="">
				<label for="Desarrolladora">Desarrolladora</label>
				<input type="text" name="Desarrolladora" id="desarrolladora">
			</div>
			<div class="">
				<label for="Year">Año</label>
				<input type="text" name="Year" id="year">
			</div>
			
			<input type="submit" class="btn waves-light" name="action" value="enviar">
		</form>

	</body>

</html>