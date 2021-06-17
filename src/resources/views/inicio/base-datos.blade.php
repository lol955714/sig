@extends('base.base')
@section('title')
Base de datos
@endsection
@section('extraJS')
@endsection
@section('contenido')
<br><h1 class="text-center text-shadow">SIG</h1><br>

<br>
<h2 class="text-center text-shadow">Administración de datos del SIG</h2>

<br>
<h3>Respaldo </h3>

<h5>Para respaldo datos del sistema vaya a <a href="https://spatie.be/docs/laravel-backup">Instrucciones</a></h5>
<p>
	Debe detener el sistema en ejecución y dentro de la consola debe ejecutar <br>
	<code>php artisan backup:run</code>
</p>

<h3>Restaurar </h3>

<h5>Para restaurar los datos del sistema debe ingresar al administrador de base de datos</h5>
<p>
	Debe detener el sistema en ejecución y dentro del administrador de bd  <br>
	cargar el fichero backup.dump generado previamente. <br>
	Al finalizar la restauración vuelve a ejecutar el sistema.
</p>

@endsection
