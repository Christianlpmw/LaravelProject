<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Juegos</title>
		@vite(['resources/css/estilos.css','resources/css/app.css'])
	</head>
	<body>
		{{-- @if(session()->has('success'))
			<p>MUY BIEN</p>
		@endif --}}
		<h1>LISTA DE JUEGOS</h1>
		<button><a href="/juego/create">CREAR JUEGO</a></button>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Genero</th>
					<th>Precio</th>
					<th>Empresa</th>
					<th>Ver</th>
			  	</tr>
			</thead>
			<tbody>
			@foreach ($juegos as $juego)
			  	<tr>
					<td>{{$juego->id}}</td>
					<td>{{$juego->Nombre}}</td>
					<td>{{$juego->Genero}}</td>
					<td>{{$juego->Precio}}</td>	
				<td>
					@foreach ($juego -> caracs as $carac)
					{{$carac ->Empresa}}
					@endforeach
					</td>
						<td><a href="/juego/{{$juego->id}}">IR</a></td>
					</tr>
				@endforeach
			</tbody>
		  </table>
	</body>
</html>