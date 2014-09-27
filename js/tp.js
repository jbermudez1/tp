$(document).ready( function(){
	$('#menuLateral').addClass('oculto');
	$('.banner').hide();

});

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
// google.maps.event.addDomListener(window, 'load', initialize);













// function verMapa(lat, lon) {
//   var myLatlng = new google.maps.LatLng(24.7929965,-107.4063979);
//   var posicion = new google.maps.LatLng(lat,lon);
//   var mapOptions = {
//     zoom: 13,
//     center: myLatlng
//   }
//   var map = new google.maps.Map(document.getElementById('mapa'), mapOptions);

//   var marker = new google.maps.Marker({
//       position: myLatlng,
//       map: map,
//       title: 'Hello World!'
//   });
//   var marcador = new google.maps.Marker(
//   {
//   	position: posicion,
//   	map: map,
//     	tittle: 'posicion dos'

//   }	);
// }

// verMapa();

// function creaMapa(){
// 	var mapa;
// 	mapa = new Image();
// 	mapa.src = "http://maps.googleapis.com/maps/api/staticmap?zoom=15&size=600x600&sensor=false&center=24.7929965,-107.4063979";
// 	$('#mapa').append(mapa);
// 	console.log(mapa);

// }
// creaMapa();





