@extends('base.base')
@section('title')
Productos por fecha de vencimiento
@endsection
@section('extraJS')
@endsection
@section('contenido')
<h2 class="text-center">Fechas de vencimiento</h2>
<br />

<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<h4 style="display: inline-block;">Productos más próximos a vencerse</h4>
			<a class="add-modal btn btn-primary" href="{{ route('estrategico.fechaVencimiento') }}">
				<span class="fas fa-print">&nbsp;</span>&nbsp;Generar reporte
			</a>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Producto</th>
					<th>Tipo</th>
					<th>Fecha de vencimiento</th>
					<th>Existencias</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>

			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection