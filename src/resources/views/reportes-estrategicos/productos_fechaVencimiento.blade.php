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
					<th>Fecha de vencimiento</th>
					<th>Existencias</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				<tr>
					<td>Suero oral</td>
					<td>Polvos</td>
					<td>20/06/2021</td>
					<td>25</td>
				</tr>
				<tr>
					<td>Acetaminofen MK</td>
					<td>Pastillas</td>
					<td>20/07/2021</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Tiamina</td>
					<td>Pastillas</td>
					<td>20/06/2021</td>
					<td>25</td>
				</tr>
				<tr>
					<td>Suero</td>
					<td>Líquidos</td>
					<td>29/06/2021</td>
					<td>3</td>
				</tr>
				<tr>
					<td>Tylenol</td>
					<td>Pastillas</td>
					<td>24/06/2021</td>
					<td>17</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection