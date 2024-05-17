<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Juegos</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body>

		<h1>{{$carac->Empresa}}</h1>
		<h3>{{$carac->Year}}</h3>
		<a href="/carac/{{$carac->id}}/edit">Modificar</a>
		<form method="POST" action="/carac/{{$carac->id}}" id="formulario">
			@csrf
			@method('DELETE')		
			<input type="submit"  class="btn center" name="action" value="Eliminar">
		</form>
	</body>

</html>