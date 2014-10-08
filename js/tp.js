$(document).ready( function(event){
	$('#menuLateral').addClass('oculto');
	$('.banner').hide();
  $('#poli').click(indexLinks);
  detectaLinkIndex();
  // if (event.currentTarget.dataset.id) {};
});

function detectaLinkIndex (){

  var poliuretano = "poli";
  var lanaMineral = "lanamineral";
  var perfiles = "perfiles";

var categoria = localStorage["link"];

if (categoria === poliuretano ) {
  localStorage.removeItem("link");
  primerProductos();
    // $.get ("productos/lanamineral/construccion/box.html", function(producto){
    // $('#detalleProductos').html(producto);

}
if (categoria === lanaMineral ) {
    $.get ("productos/lanamineral/construccion/pentaw.html", function(producto){
    $('#detalleProductos').html(producto);});
    $('#lanaMineral').addClass('in');
    $('#poliuretano').removeClass('in');
      localStorage.removeItem("link");
}
if (categoria === perfiles ) {
 $.get ("productos/perfiles//canalu.html", function(producto){
    $('#detalleProductos').html(producto);});
    $('#perfiles').addClass('in');
    $('#poliuretano').removeClass('in');
      localStorage.removeItem("link");
} 

}

function primerProductos() {
		$.get ("productos/poliuretano/construccionFachada/box.html", function(producto){
		$('#detalleProductos').html(producto);
		$('.banner').show();

	
	})	


}

$('#verMenuLateral').click( ocultaMenu);


function ocultaMenu () {
	$('#menuLateral').toggleClass('oculto ');
	// $('#poliuretano').toggleClass('in');

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

$$("#contenedorProductos" ).on("swipeRight", ocultaMenu );
$$("#menuLateral" ).on("swipeLeft", ocultaMenu );


// MAPA DE UBICACION.
function arrancaGeo(){
//  DETECTAR UBICACION DEL CLIENTE
var geo = navigator.geolocation; // declarar variable corta de geo

var opciones = [];

function geo_error(){
	alert('No fue posible detectar su ubicación')
}

function geo_exito(posicion){
	var lat = posicion.coords.latitude;
	var lon = posicion.coords.longitude;
	console.log(lat,lon)
	initialize(lat, lon);
}
function geo_opciones(){

}
 geo.getCurrentPosition(geo_exito, geo_error, geo_opciones);

// Utilizamos el metodo de javascript getCurrentPosition, obtenemos sus objetos y los enviamos a 3 funciones el orden es importante
// geo.getCurrentPosition(geo_exito, geo_error, geo_opciones);
// AGREGAMOS LA RUTA DEL CLIENTE Y SUCURSAL



var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize(lat, lon) {
  var ubicacionCliente = new google.maps.LatLng(lat, lon);
  var culiacan = new google.maps.LatLng( 24.8049172, -107.4233141); 
  var sucursaltp = new google.maps.LatLng(24.7929965,-107.4063979); 

  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
    // zoom:1,
    // center: culiacan
  };
  map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
  directionsDisplay.setMap(map);
  calcRoute(ubicacionCliente, sucursaltp);
}

function calcRoute(ubicacionCliente, sucursaltp) {
  var start = ubicacionCliente;
  var end = sucursaltp;
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}
}
// LINKS DEL INDEX

function indexLinks(eldato){
    // var clikeado = event.currentTarget.dataset.cat;
      var elemento = localStorage.setItem("link", eldato);
      window.location.href="productos.php"

}