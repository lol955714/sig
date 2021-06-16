@extends('base.base')
@section('title')
Rotación de inventario
@endsection
@section('extraHead')
<link rel="stylesheet" href="{{asset('css/date/flatpickr.css')}}">
<link rel="stylesheet" href="{{asset('css/date/temas/dark.css')}}">
@endsection
@section('extraJS')
<!-- para fecha-->
<script type="text/javascript" src="{{asset('js/date/flatpickr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/date/lang-es.js')}}"></script>
<script type="text/javascript" src="{{asset('js/date/flatpickr-config.js')}}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Rotación de inventario</h2>
<br />

<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<div class="form-group row">
				<select class="col-md-2 form-control">
					<option selected="true" disabled="true">Año</option>
					<option>2021</option>
					<option>2020</option>
					<option>2019</option>
					<option>2018</option>
					<option>2017</option>
				</select>
				<select class="col-md-2 form-control">
					<option selected="true" disabled="true">Mes</option>
					<option>Enero</option>
					<option>Febrero</option>
					<option>Marzo</option>
					<option>Abril</option>
					<option>Mayo</option>
					<option>Junio</option>
					<option>Julio</option>
					<option>Agosto</option>
					<option>Septiembre</option>
					<option>Octubre</option>
					<option>Noviembre</option>
					<option>Diciembre</option>
				</select>
				<label class="col-md-2 col-form-label text-md-right">
					<b>Meses tomados: </b>
				</label>
				<div class="col-md-2">
					<input type="number" class="form-control" min='1' required>
				</div>
				<select class="col-md-2 form-control">
					<option selected="true" disabled="true">Categoría </option>
					<option>Vitaminas</option>
					<option>Antigripales</option>
					<option>Analgésicos</option>
					<option>Antivirales</option>
					<option>Anti-inflamatorios</option>
				</select>
				&nbsp;&nbsp;
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
					<th>Existencias</th>
					<th>Ventas</th>
					<th>Compras</th>
					<th>Rotación</th>
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
