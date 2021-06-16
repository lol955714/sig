@extends('base.base')
@section('title')
Productos más vendidos por estación
@endsection
@section('extraJS')
@endsection
@section('contenido')
<h2 class="text-center">Mejores productos por estación</h2>
<br />

<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
            <div class="form-group row">
				<label class="col-md-2 col-form-label text-md-right">
					<b>Estación a analizar: </b>
				</label>
				<select class="col-md-2 form-control">
					<option selected="true" disabled="true">Estación </option>
					<option>Verano</option>
					<option>Invierno</option>
					<option>Transición invierno a verano</option>
					<option>Transición verano a invierno</option>
				</select>
				&nbsp;&nbsp;
				<button class="add-modal btn btn-primary">
					<span class="fas fa-print"></span>&nbsp;Imprimir reporte
				</button>
			</div>
		</ul>
	</div>
	<div class="panel-body">
        <label class="col-md-2 col-form-label text-md-right">
            <b>Estación: Invierno: </b>
        </label>
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Producto</th>
					<th>Tipo</th>
					<th>Cantidad de productos vendidos</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				<tr>
					<td>X</td>
					<td>X</td>
					<td>X</td>
				</tr>
				<tr>
					<td>X</td>
					<td>X</td>
					<td>X</td>
				</tr>
				<tr>
					<td>X</td>
					<td>X</td>
					<td>X</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection