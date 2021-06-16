@extends('base.base')
@section('title')
Perfil usuario
@endsection

@section('contenido')


<h2 class="text-center">Información de tu perfil</h2>
<div class="card-body">
	<div class="form-group row">
		<label for="name" class="col-md-4 col-form-label text-md-right"><b>Nombre de usuario:</b></label>
		<div class="col-md-6">
			<label for="name" class="col-form-label text-md-left">{{ $usuarios->nombre_usuario}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label for="name" class="col-md-4 col-form-label text-md-right"><b>Nombre completo:</b></label>
		<div class="col-md-6">
			<label for="name" class="col-form-label text-md-left">{{ $usuarios->nombres}} {{ $usuarios->apellidos}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label for="name" class="col-md-4 col-form-label text-md-right"><b>Rol:</b></label>
		<div class="col-md-6">
			<label for="name" class="col-form-label text-md-left">{{ $usuarios->rol->nombre_rol}}</label>
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<a class="btn btn-secondary" href="{{ url()->previous() }}">Regresar</a>
	</div>

</div>

@endsection