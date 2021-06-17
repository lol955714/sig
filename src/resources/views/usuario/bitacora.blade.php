@extends('base.base')
@section('title')
Bitácora
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/usuario.js') }}"></script>
@if (session('status'))
<script type="text/javascript">
	toastr.success('{{ session('status') }}','Éxito')
</script>
@endif
@endsection
@section('contenido')
<h2 class="text-center">Bitácora</h2>
<br />
<div class="panel panel-default">
	<div class="panel-heading">
		<ul>&nbsp;
			<a class="add-modal btn btn-secondary" href="#"><span class="fas fa-back">&nbsp;</span>Regresar</a>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Usuario</th>
					<th>Rol</th>
					<th>Fecha y hora</th>
					<th>Acción</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				<tr>
					<td>william.lopez</td>
					<td>Táctico</td>
					<td>2021/06/15 - 16:45</td>
					<td>Generar reporte de ventas por período</td>
				</tr>
				<tr>
					<td>jose.rivas</td>
					<td>Estratégico</td>
					<td>2021/06/14 - 13:14</td>
					<td>Generar reporte de productos más vendidos</td>
				</tr>
				<tr>
					<td>william.lopez</td>
					<td>Táctico</td>
					<td>2021/06/14 - 12:10</td>
					<td>Generar reporte de ventas por período</td>
				</tr>
				<tr>
					<td>jose.rivas</td>
					<td>Estratégico</td>
					<td>2021/06/13 - 16:14</td>
					<td>Generar reporte de productos más vendidos</td>
				</tr>
				<tr>
					<td>william.lopez</td>
					<td>Táctico</td>
					<td>2021/06/07 - 15:45</td>
					<td>Generar reporte de ventas por categoría</td>
				</tr>
				<tr>
					<td>jose.rivas</td>
					<td>Estratégico</td>
					<td>2021/06/06 - 12:18</td>
					<td>Generar reporte de compras por período</td>
				</tr>
				<tr>
					<td>jose.rivas</td>
					<td>Estratégico</td>
					<td>2021/06/05 - 17:25</td>
					<td>Generar reporte de margen de utilidad</td>
				</tr>
				<tr>
					<td>jose.rivas</td>
					<td>Estratégico</td>
					<td>2021/06/05 - 08:55</td>
					<td>Generar reporte de productos por fecha de vencimiento</td>
				</tr>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

<!-- Modales para registrar, editar y eliminar-->
@endsection
