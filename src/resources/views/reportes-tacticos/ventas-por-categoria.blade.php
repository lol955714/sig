@extends('base.base')
@section('title')
Ventas por categoría
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
<h2 class="text-center">Ventas por categoría</h2>
<br />

<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<div class="form-group row">
				<label class="col-md-2 col-form-label text-md-right">
					<b>Fecha inicio: </b>
				</label>
				<div class="col-md-2">
					<input type="text" class="form-control fecha-format" value="2020-06-01" disabled>
				</div>
				<label class="col-md-2 col-form-label text-md-right">
					<b>Fecha final: </b>
				</label>
				<div class="col-md-2">
					<input type="text" class="form-control fecha-format" value="2020-06-16" disabled>
				</div>
				<select class="col-md-2 form-control" disabled>
					<option disabled="true">Categoría </option>
					<option selected="true">Vitaminas</option>
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
					<th>Tipo</th>
					<th>Monto vendido</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				<tr>
					<td>FosfoB 12</td>
					<td>Bebible</td>
					<td>$250.00</td>
				</tr>
				<tr>
					<td>Ultradoceplex</td>
					<td>Inyectable</td>
					<td>$175.00</td>
				</tr>
				<tr>
					<td>Complejo B</td>
					<td>Bebible</td>
					<td>$163.00</td>
				</tr>
				<tr>
					<td>Vitamina D</td>
					<td>Bebible</td>
					<td>$100.00</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection
