@extends('base.base')
@section('title')
Productos más vendidos por categoría
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
<h2 class="text-center">Productos más vendidos por categoría</h2>
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
					<input type="text" class="form-control fecha-format" required>
				</div>
				<label class="col-md-2 col-form-label text-md-right">
					<b>Fecha final: </b>
				</label>
				<div class="col-md-2">
					<input type="text" class="form-control fecha-format" required>
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
				<a class="add-modal btn btn-primary" href="{{ route('tactico.masvendidos') }}">
					<span class="fas fa-print"></span>&nbsp;Generar reporte
				</a>
			</div>
		</ul>
	</div>
	<div class="panel-body">
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

			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection
