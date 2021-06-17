@extends('base.base')
@section('title')
Margen de utilidad
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
<h2 class="text-center">Mejor margen de utilidad</h2>
<br />

<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<h4 style="display: inline-block;">Productos con mayor margen de utilidad&nbsp;&nbsp;</h4>
		</ul>
	</div>
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
		<a class="add-modal btn btn-primary" href="{{ route('estrategico.margenUtilidad') }}">
			<span class="fas fa-print"></span>&nbsp;Generar reporte
		</a>
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
				
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection
