<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Juegos</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body>

		<h1>{{$juego->Nombre}}</h1>
		<h3>{{$juego->Precio}}</h3>
		<a href="/juego/{{$juego->id}}/edit">Modificar</a><br><br>
		<form method="POST" action="/juego/{{$juego->id}}" id="formulario">
			@csrf
			@method('DELETE')		
			
			<input type="submit"  class="btn center" name="action" value="Eliminar">
		</form>
	</body>

</html>