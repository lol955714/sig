<!DOCTYPE html>
<html lang="es">
<head>
	<title>SIL | @section('title') Error X! @show</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/errors.css') }}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('css/fontawesome.all.min.css')}}">
</head>
<body>
	<div id="main">
		<div class="fof"><br><br>
			<h1>@section('h1') Error X! @show</h1><br>
			<h2>@section('h2')Mensaje de error @show</h2>
			<p><b>@section('texto') Texto adicional @show</b></p>
			@section('boton')
			<h2 class="text-center"><a class="btn btn-secondary my-2 my-sm-0" href="{{route('inicio.admin')}}">Ir al inicio</a></h2>
			@show
		</div>
	</div>
</body>
</html>