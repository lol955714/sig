@extends('base.base')
@section('title')
Administrar usuarios del sistema
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/usuario.js') }}"></script>
@if (session('status'))
<script type="text/javascript">
	toastr.success('{{ session('status') }}','Éxito')
</script>
@endif
@endsection
@section('contenido')
<h2 class="text-center">Administrar Usuarios del Sistema</h2>
<br />
<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<a class="add-modal btn btn-primary" href="#"><span class="fas fa-user-plus">&nbsp;</span>Registrar usuario</a> &nbsp;
			<a class="add-modal btn btn-secondary" href="#"><span class="fas fa-list">&nbsp;</span>Bitácora</a>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Usuario</th>
					<th>Nombre y apellido</th>
					<th>Rol</th>
					<th>Acciones</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@foreach($usuarios as $indexKey => $usuario)
				<tr class="itemUsuario{{$usuario->id_usuario}}">
					<td>{{$usuario->nombre_usuario}}</td>
					<td>{{$usuario->nombres}}&nbsp;{{$usuario->apellidos}}</td>
					<td>{{$usuario->rol->nombre_rol}}</td>
					<td>
						<button class="ver-modal btn btn-secondary" >
							<span class="fas fa-eye"></span>&nbsp;Detalle
						</button>
						<a class="btn btn-info" href="#">
							<span class="fas fa-edit"></span>&nbsp;Editar
						</a>
						<button class="delete-modal btn btn-danger" data-id="{{$usuario->id_usuario}}" data-auth="{{trim(Auth::user()->id_usuario)}}">
							<span class="fas fa-trash"></span>&nbsp;Eliminar
						</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

<!-- Modales para registrar, editar y eliminar-->
@endsection
