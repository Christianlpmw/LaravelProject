<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Juegos</title>
		<link rel="stylesheet" href="app.css">
		@vite(['resources/css/estilos.css','resources/css/app.css'])

	</head>
	<body>
		{{--formulario que te manda al inicio, y se utiliza un multipart para subir imagenes--}}
		<form method="POST" class="col s12 m8 l6 offset-m2 offset-l3" action="/juego" id="formulario" >
			@csrf{{--seguridad dentro del formulario--}}
			
			<div class="">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" id="nombre"/>
			</div><br>
			<div class="">
				<label for="Genero">Genero</label>
				<input type="text" name="Genero" id="genero">
			</div><br>
			<div class="">
				<label for="Precio">Precio</label>
				<input type="text" name="Precio" id="precio">
			</div><br>

			<div class='input-field'>
			<label for='caracs'>Caracteristicas</label><br><br>
				<select id='caracs' name='caracs[]' multiple>
					<option value="" disabled selected>Selecciona una empresa</option>
					@foreach($caracs as $carac)
						<option value="{{$carac->id}}">{{$carac->Empresa}}</option>
					@endforeach
				</select>
				

			</div>
			<br>
			<input type="submit" class="btn waves-light" name="action" value="Enviar">
		</form>

	</body>

</html>