//configuración de flatpickr
//Para usarlo debe poner en "class del input" el tag "fecha-format" 
//y deshabilitar el input para que el usuario no lo modifique

var fp = flatpickr(".fecha-format", {
  allowInput: true,
  altInput: true,
  altFormat: "d/m/Y",
  //altFormat: "d F, Y",
  enableTime: false,
  dateFormat: "Y-m-d",
  "locale": "es",
  maxDate: Date.now(),
})