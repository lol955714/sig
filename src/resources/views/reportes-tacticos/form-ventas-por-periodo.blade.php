@extends('base.base')
@section('title')
Ventas por período
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
<h2 class="text-center">Ventas por período</h2>
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
				&nbsp;&nbsp;
				<a class="add-modal btn btn-primary" href="{{ route('tactico.periodo') }}">
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
					<th>Monto vendido</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>

			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection
