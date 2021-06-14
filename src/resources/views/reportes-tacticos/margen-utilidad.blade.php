@extends('base.base')
@section('title')
Margen de utilidad
@endsection
@section('extraJS')
@endsection
@section('contenido')
<h2 class="text-center">Mejor margen de utilidad</h2>
<br />

<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<h4 style="display: inline-block;">Productos con mayor margen de utilidad&nbsp;&nbsp;</h4>
			<button class="add-modal btn btn-primary">
				<span class="fas fa-print">&nbsp;</span>Imprimir reporte
			</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Producto</th>
					<th>Tipo</th>
					<th>Margen de utilidad</th>
					<th>Existencias</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				<tr>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
				</tr>
				<tr>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
				</tr>
				<tr>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection
