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
				<span class="fas fa-print">&nbsp;</span>&nbsp;Imprimir reporte
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
					<td>Acetaminofen</td>
					<td>Pastilla</td>
					<td>$0.15</td>
					<td>120</td>
				</tr>
				<tr>
					<td>Acetaminofen MK</td>
					<td>Pastilla</td>
					<td>$0.10</td>
					<td>112</td>
				</tr>
				<tr>
					<td>Tylenol</td>
					<td>Pastilla</td>
					<td>$0.09</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Ibuprofeno</td>
					<td>Pastilla</td>
					<td>$0.08</td>
					<td>60</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection
