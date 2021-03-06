@extends('base.base')
@section('title')
Comparación de montos de compras entre períodos
@endsection
@section('extraJS')
@endsection
@section('contenido')
<h2 class="text-center">comparación de períodos</h2>
<br />

<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<div class="form-group row">
				<select class="col-md-2 form-control" disabled>
					<option disabled="true">Período  1 </option>
					<option selected="true">Enero</option>
					<option>Febrero</option>
					<option>Marzo</option>
					<option>Abril</option>
					<option>Mayo</option>
				</select>
				&nbsp;&nbsp;
				<select class="col-md-2 form-control" disabled>
					<option selected="true" disabled="true">Período 2 </option>
					<option>Enero</option>
					<option selected="true">Febrero</option>
					<option>Marzo</option>
					<option>Abril</option>
					<option>Mayo</option>
				</select>&nbsp;&nbsp;&nbsp;
				<button class="add-modal btn btn-primary">
					<span class="fas fa-print"></span>&nbsp;Imprimir reporte
				</button>
			</div>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Producto</th>
					<th>Cantidad periodo 1</th>
					<th>Monto total comprado periodo 1</th>
					<th>Cantidad periodo 2</th>
					<th>Monto total comprado periodo 2</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				<tr>
					<td>Acetaminofén</td>
					<td>10</td>
					<td>$1.00</td>
					<td>20</td>
					<td>$2.00</td>
				</tr>
				<tr>
					<td>Paracetamol</td>
					<td>15</td>
					<td>$1.50</td>
					<td>25</td>
					<td>$2.50</td>
				</tr>
				<tr>
					<td>Ibuprofeno</td>
					<td>10</td>
					<td>$2.00</td>
					<td>15</td>
					<td>$3.00</td>
				</tr>
				<tr>
					<td>Tylenol</td>
					<td>2</td>
					<td>$1.75</td>
					<td>5</td>
					<td>$3.50</td>
				</tr>
				<tr>
					<td>Suero oral</td>
					<td>30</td>
					<td>$30.00</td>
					<td>25</td>
					<td>$25.00</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection