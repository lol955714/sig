//boton de cerrado
toastr.options.closeButton = true;
//metodo de mostrar el toast al aparecer
toastr.options.showMethod = 'slideDown';
//metodo de quitar el toast al terminar el tiempo
toastr.options.hideMethod = 'slideUp';
//metodo de quitar el toast al presionar el boton de cerrar
toastr.options.closeMethod = 'slideUp';
//habilita-deshabilita que aparezcan toast con la misma información
toastr.options.preventDuplicates = true;
//tiempo por defecto que dura un toast
toastr.options.timeOut = 5000;
//habilita-deshabilita la barra de progreso en el toast
toastr.options.progressBar = true;
