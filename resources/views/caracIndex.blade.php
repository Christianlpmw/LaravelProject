<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Juegos</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body>
		{{-- @if(session()->has('success'))
			<p>MUY BIEN</p>
		@endif --}}
		<h1>LISTA DE JUEGOS</h1>
		<button><a href="/carac/create">CREAR JUEGO</a></button>
		<table>
			<thead>
			  	<tr>
					<th>ID</th>
					<th>Empresa</th>
					<th>Desarrolladora</th>
					<th>Año</th>
					<th>Ver</th>
			  	</tr>
			</thead>
			<tbody>
				@foreach ($caracs as $carac)
					<tr>
						<td>{{$carac->id}}</td>
						<td>{{$carac->Empresa}}</td>
						<td>{{$carac->Desarrolladora}}</td>
						<td>{{$carac->Year}}</td>
						<td><a href="/carac/{{$carac->id}}">IR</a></td>
					</tr>
				@endforeach
			</tbody>
		  </table>
	</body>
</html>