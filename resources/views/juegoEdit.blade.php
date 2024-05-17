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
		<form method="POST"  action="/juego/{{$juego->id}}" id="formulario" >
			@csrf{{--seguridad dentro del formulario--}}
            @method('PATCH')
			
			<div class="">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" id="nombre" value="{{$juego->Nombre}}"/>
			</div>
			<div class="">
				<label for="Genero">Genero</label>
				<input type="text" name="Genero" id="genero" value="{{$juego->Genero}}">
			</div>
			<div class="">
				<label for="Precio">Precio</label>
				<input type="text" name="Precio" id="precio" value="{{$juego->Precio}}">
			</div>
			<div class='input-field'>
				<select id='caracs' name='caracs[]' multiple>
					@foreach($caracs as $carac)
						<option value="{{$carac->id}}"></option>
						<option value="{{$carac->id}}">{{$carac-> Empresa}}</option>
					@endforeach
				</select>
				<label for='caracs'>Caracteristicas</label>

			</div>
			
			<input type="submit" name="action" value="enviar">
		</form>

	</body>

</html>