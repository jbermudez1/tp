$(document).ready( function(){
	$('#menuLateral').addClass('oculto');

	
});

$('#logo').click( ocultaMenu);


function ocultaMenu () {
	$('#menuLateral').toggleClass('oculto');
}


$('.cargaPagina').click(cargarPaginas)
// console.log(event.currentTarget.attributes[1].value) 




function cargarPaginas (event){
	
	// var cageroria = $(this).parent().parent().parent().attr('class');
	var categoria = event.currentTarget.dataset.cat
	var pagina = event.currentTarget.dataset.producto + ".html" ;

	$.get ("productos/" + categoria +"/"+ pagina, function(producto){
		ocultaMenu();
		$('#detalleProductos').html(producto);

	})	

}