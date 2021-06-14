//visualización del boton
$(window).scroll(function(){
  if($(this).scrollTop() > 100){
    $("#js_up").slideDown(200);
  }else{ 
    $("#js_up").slideUp(200);
  }
});

//creamos una función accediendo a la etiqueta i en su evento click
$("#js_up").on('click', function (e) { 
  e.preventDefault();
  $("body,html").animate({ 
    scrollTop: 0 
  },1000);
  return false; 
});
