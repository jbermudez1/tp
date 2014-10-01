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

		<header id="interior">
            <?php include('menuSuperiorInterior.php') ?>
		</header>
	<section class="container">
		<div class="nombreProducto">
                <h2>Nuestra Empresa</h2><span class="rutaProducto">Descripción y certificaciones.</span>
                <hr/>
        </div>
		<div class="row">
			<div class="col-sm-6">
				<p>
					Somos una empresa dedicada a la distribución de panel aislante de poliuretano y panel de lana mineral, con el objetivo de satisfacer las necesidades de cada uno de sus clientes, brindándole calidad, servicio y  entrega inmediata.
				</p>
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img-responsive" src="img/cer1.png">
			</div>
			<div class="col-xs-6 col-sm-3">
				<img class="img-responsive" src="img/cer1.png">
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