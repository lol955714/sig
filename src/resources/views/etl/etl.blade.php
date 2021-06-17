@extends('base.base')
@section('title')
ETL
@endsection
@section('extraJS')
@endsection
@section('contenido')
<br><h1 class="text-center text-shadow">Administración de ETL</h1><br>

<br>
<button class="delete-modal btn btn-primary btn-lg" data-id="" data-toggle="modal" data-target="#etl">
	<span class="fas fa-data"></span>&nbsp;Realizar migración
</button>

<button class="delete-modal btn btn-danger btn-lg" data-id="" data-toggle="modal" data-target="#etl-delete">
	<span class="fas fa-trash"></span>&nbsp;Limpiar migración
</button>



<div class="modal fade" id="etl-delete">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Limpiar migración</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<div id="modal-body-eliminar">
					<h5 class="text-center">¿Está seguro/a de limpiar la información de migración realizada?</h5>
				</div>
				<div class="form-group" hidden="true">
					<label class="control-label col-sm-2" for="id">ID:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_delete" disabled>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="eliminar btn btn-danger delete" data-dismiss="modal">Eliminar</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="etl">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Realizar migración</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<div id="modal-body-eliminar">
					<h5 class="text-center">Se procederá a migrar la información de la base de datos transaccional </h5>
				</div>
				<div class="form-group" hidden="true">
					<label class="control-label col-sm-2" for="id">ID:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_delete" disabled>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="eliminar btn btn-success delete" data-dismiss="modal">Proceder</button>
			</div>
		</div>
	</div>
</div>

@endsection