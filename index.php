<!DOCTYPE html>
<html lan="es">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/tp.css">
		<link rel="stylesheet" type="text/css" href="css/medias.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	</head>

	<body>
		<section id="raya"></section>

		<header id="index">
			<?php include('menuSuperior.php') ?>
		</header>
	<section class="container">
	<div clas="row">
		<div class="col-sm-4">
			<div class="row">
				<div class="col-xs-3">
					<img class="img-responsive" src="img/panel-poli.jpg">
				</div>
				<div class="col-xs-9">
					<article class="">
						<a  ><h3 onclick="indexLinks('poli')" class="fnaranja">Panel Poliuretano</h3></a>
							<p>Una completa gama de productos para construcción para la industria del frío y sectores agrícolas. capaz de conjugar del mejor modo eficiencia y funcionalidad.
							</p>
					</article>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="row">
				<div class="col-xs-3">
					
						<img class="img-responsive" src="img/panel-lana.jpg">
					
				</div>
				<div class="col-xs-9">
					<article class="">
							<a id="lana"><h3 onclick="indexLinks('lanamineral')" class="fnaranja">Panel Lana Mineral</h3></a>
							<p>Por sus elevadas características higiénicas.
								La lana de roca es biosoluble.
								No puede ser atacada por los insectos, microorganismos u hongos.
							</p>
					</article>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="row">
				<div class="col-xs-3">
					
						<img class="img-responsive" src="img/perfiles.jpg">
					
				</div>
				<div class="col-xs-9">
					<article class="">
							<a id="perfiles" ><h3 class="fnaranja" onclick="indexLinks('perfiles')">Perfiles</h3></a>
							<p>Elementos necesarios para cubrir traslapes, juntas y remates. La principal función de la moldura es crear unión que le permita presentar una obra limpia.
							</p>
					</article>
				</div>
			</div>
		</div>	
	</div>
	</section>
	<footer>
		<?php include('footer.php') ?>
	</footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
        <script src="js/quojs/quo.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tp.js"></script>
	</body>


</html>