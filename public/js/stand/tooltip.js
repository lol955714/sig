/*Forma de uso:
*dentro del input o texto coloca las propiedades "data-toogle", "title" y "data-placement"
* en data-toogle solo coloca 'tooltip', en title el texto que desea mostrar
* y en data-placement la alineacion donde mostrará el tooltip top/right/left/bottom
*ejemplo: 
<a href="#" data-toggle="tooltip" data-placement="left" title="izquierda">Mírame</a>
*/ 

//precarga de la función para tooltip
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();   
});
