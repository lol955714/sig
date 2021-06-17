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
					<input type="text" class="form-control fecha-format" value="1/5/2021" disabled>
				</div>
				<label class="col-md-2 col-form-label text-md-right">
					<b>Fecha final: </b>
				</label>
				<div class="col-md-2">
					<input type="text" class="form-control fecha-format" value="31/5/2021" disabled>
				</div>
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
					<td>Acetaminofén</td>
					<td>Pastilla</td>
					<td>$125</td>
				</tr>
				<tr>
					<td>Tylenol</td>
					<td>Pastilla</td>
					<td>$75</td>
				</tr>
				<tr>
					<td>Ibuprofeno</td>
					<td>Pastilla</td>
					<td>$85</td>
				</tr>
				<tr>
					<td>Suero</td>
					<td>Líquido</td>
					<td>$146</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection
