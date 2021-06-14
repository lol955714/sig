<!DOCTYPE html>
<html lang="es">
<head>
	@section('head') @include('base.head') @show
	<title>SIG | @section('title') Base @show</title>
	@section('extraHead') @show
</head>
<body>
	@section('body')
	@section('navbar') @include('base.navbar') @show
	<!-- Inicio del contenido de la página -->
	@section('container')<main role="main" class="container">
		<br>
		@show
		@section('contenido')
		
		@show
	</main>
	@section('footer') @include('base.footer') @show
	@section('jsFooter') @include('base.jsfooter') @show
	@section('extraJS') @show
	@show
</body>
</html>
