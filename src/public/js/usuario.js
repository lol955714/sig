//Retrasar la carga de la tabla hasta que se cargue todo lo demás
$(window).load(function(){
	$('#postTable').removeAttr('style');
});


//Abrir modals //

/* Eliminar */
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id'));
    
    id = $('#id_delete').val();
    id_auth = $(this).data('auth');
    if(id==id_auth){
        toastr.error('No se puede eliminar su propia cuenta \n si esta iniciada la sesión', 'Error!');
    }else{
        $('#modal-eliminar-usuario').modal('show');
    }
});

/* ver*/ 
$(document).on('click', '.ver-modal', function() {
            // colocar inputs
            $('#usuario').val($(this).data('usuario'));
            $('#rol').val($(this).data('rol'));

            name = $(this).data('nombre') + ' ' + $(this).data('ape');

            $('#nombre').val(name);
            if($(this).data('coord')==0){
                $("#hide_c").hide();
            }else{
                $("#hide_c").show();
            }
            $('#area').val($(this).data('area'));
            if($(this).data('area')==0){
                $("#hide_a").hide();
            }else{
                $("#hide_a").show();
            }
            $('#coordinacion').val($(this).data('coord'));

            //mostrar modal
            $('#modal-ver-usuario').modal("show");
        });

/* password */
$(document).on('click', '.password-modal', function() {
	$('#id').val($(this).data('id'));

    $('#password').val('');
    $('#password-confirm').val('');
    
    $('#modal-password-usuario').modal('show');
    id = $('#id').val();
});

// acciones ajax y validaciones con toastr//


/* password */
$('.modal-footer').on('click', '.change', function() {
    x = validateMyForm(); //true deja pasar
    /*
    if(x==true){
        alert("pasó");
    }else{alert("falso");}
    */
    if (x==true){
        $.ajax({
            type: 'PUT',
            url: 'pass/' + id,
            data: {
                '_token': $('input[name=_token]').val(),
                'password': $("#password").val(),
            },
            success: function(data) {
                toastr.success('Contraseña actualizada!', 'Éxito!', {timeOut: 2000});

            }
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            setTimeout(function () {
                $('#modal-password-usuario').modal('show');}, 500);
            toastr.error('Ha ocurrido una falla interna al cambiar la contraseña', 'Error!');
        });
    }
});


/* eliminar */
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'usuario/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado el usuario', 'Éxito!', {timeOut: 5000});
            $('.itemUsuario' + data['id_usuario']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }
        
        
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se puede eliminar ya que tiene dependencias', 'Error!');
    });
});



/* Editar */
$('.update-user').on('click', '.edit', function() {
    id = $("#id_usuario").val()
    user = $('#nombre_usuario').val(),

    toastr.warning('El sistema esta procesando', 'Espere...', {timeOut: 4000});
    $.ajax({
        type: 'PUT',
        url: '../usuario/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id_usuario': $("#id_usuario").val(),
            'nombre_usuario': $('#nombre_usuario').val(),
            'nombres': $('#nombres').val(),
            'apellidos': $('#apellidos').val(),
            'id_rol': $('#id_rol').val(),
            'id_coord': $('#id_coord').val(),
            'id_area': $('#nombre_area').val(),
        },
        success: function(data) { 

            if ((data.errors)) {
                setTimeout(function () {
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                
            } else {
                toastr.clear();
                toastr.success('el usuario '+user+' fue editado correctamente', 'Éxito!');
                setTimeout(function(){
                    window.location.replace("../usuario");
                }, 5000);
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#modal-editar-cliente').modal('show');}, 500);
        toastr.warning('Ha ocurrido un error interno del sistema', 'Usuario no editado!');
    });
});

//validacion de contraseñas
function validateMyForm(){
    var pass = $("#password").val();
    var confirm = $("#password-confirm").val();

    if(pass=='' || confirm==''){
        setTimeout(function () {
            $('#modal-password-usuario').modal('show');
            toastr.warning('Debe escribir en ambos campos', {timeOut: 5000});
        }, 500);
        return false; 
    }else if(pass===confirm){
            //nada  
        }else{
            toastr.warning('Las contraseñas no coinciden', {timeOut: 5000});
            setTimeout(function () {
                $('#modal-password-usuario').modal('show');
            }, 500);
            return false; 
        }
        return true;
    };
