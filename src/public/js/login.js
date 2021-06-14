document.getElementById("myForm").onsubmit = function() {myFunction()};

function hi() {
	if(nombre_usuario.value==='' && inputPassword.value===''){
		toastr.info('Ingrese sus credenciales', {timeOut: 4000});
	}else if(nombre_usuario.value===''){
		toastr.info('Ingrese su nombre de usuario', {timeOut: 4000});
		error(sec1,part1);
	}else if (!nombre_usuario.checkValidity()) {
		toastr.warning('Debe escribir su usuario sin espacios\n y con letra minúscula','Usuario incorrecto', {timeOut: 4000});
		error(sec1,part1);
	}else if(inputPassword.value===''){
		toastr.info('Ingrese su contraseña', {timeOut: 4000});
		error(sec1,part1);
	}
}