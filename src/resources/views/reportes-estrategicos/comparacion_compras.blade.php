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
				<select class="col-md-2 form-control">
					<option selected="true" disabled="true">Período  1 </option>
					<option>Enero</option>
					<option>Febrero</option>
					<option>Marzo</option>
					<option>Abril</option>
                    <option>Mayo</option>
				</select>
				&nbsp;&nbsp;
                <select class="col-md-2 form-control">
					<option selected="true" disabled="true">Período 2 </option>
					<option>Enero</option>
					<option>Febrero</option>
					<option>Marzo</option>
					<option>Abril</option>
                    <option>Mayo</option>
				</select>
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
					<td>X</td>
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
					<td>X</td>
				</tr>
				<tr>
					<td>X</td>
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