@extends('base.base')
@section('title')
Registrar usuario
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/registrar.js') }}"></script>
@if (session('status'))
<script type="text/javascript">
	toastr.warning('{{ session('status') }}','Error');
</script>
@endif
@endsection
@section('contenido')

<div class="">
	<div class="">
		<h2 class="text-center"> Registrar nuevo usuario del sistema</h2>


		<div class="card-body">
			<form method="POST" action="#" onsubmit="return validateMyForm(this);">
				@csrf

				<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right">Nombre de usuario: <span class="text-danger" title="Requerido"><b>*</b></span></label></label>

					<div class="col-md-6">
						<input id="nombre_usuario" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autocomplete="name" autofocus pattern="[a-z.]+$" title="No se permiten espacios, sólo puede ingresar letras en minúscula y punto">
					</div>
				</div>
				

				<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right">Nombres: <span class="text-danger" title="Requerido"><b>*</b></span></label>

					<div class="col-md-6">
						<input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right">Apellidos: <span class="text-danger" title="Requerido"><b>*</b></span></label>

					<div class="col-md-6">
						<input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>
					</div>
				</div>

				<div class="form-group row">
					<label for="coordinacion" class="col-sm-4 col-form-label text-sm-right">Rol: <span class="text-danger" title="Requerido"><b>*</b></span></label>
					<div class="col-sm-6">
						<select required class="form-control" id="id_rol" name="id_rol">
							<option selected disabled="true" value="">Seleccione un rol</option>
						</select>
					</div>
				</div>


				<div class="form-group row">
					<label for="password" class="col-md-4 col-form-label text-md-right">Contraseña: <span class="text-danger" title="Requerido"><b>*</b></span></label>

					<div class="col-md-6">
						<input id="password" maxlength="40" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña: <span class="text-danger" title="Requerido"><b>*</b></span></label>

					<div class="col-md-6">
						<input id="password-confirm" maxlength="40" type="password" class="form-control" name="password-confirm" value="{{ old('password-confirm') }}" required>
					</div>
				</div>

				<div class="form-group row mb-0">
					<div class="col-md-6 offset-md-4">
						<a type="button" class="btn btn-secondary" href="#">
							Cancelar
						</a>
						<button type="submit" class="btn btn-primary">
							Registrar usuario
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function validateMyForm(){
		var pass = $("#password").val();
		var confirm = $("#password-confirm").val();
		if(pass===confirm){
			//nada	
		}else{
			toastr.warning('Las contraseñas no coinciden', {timeOut: 5000});
			return false;	
		}
		
	};

</script>
@endsection