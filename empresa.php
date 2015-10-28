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
		<?php include_once("analyticstracking.php") ?>
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
				<div class="row">
					<p>
						Somos una empresa dedicada a la distribución de panel aislante de poliuretano y panel de lana mineral, con el objetivo de satisfacer las necesidades de cada uno de sus clientes, brindándole calidad, servicio y  entrega inmediata.
					</p>
					<img src="img/bodegacosterita.png" class="img-responsive">
			    </div>

			   
			</div>
			<div class="col-sm-6">
				<div class="row">
				  <div class="col-sm-6 margen1">
					<div class="videoWrapper">
				    		   <iframe width="560" height="315" src="//www.youtube.com/embed/cxr6lPviRW4" frameborder="0" allowfullscreen></iframe>
	      			</div>					
				  </div>
				  <div class="col-sm-6 margen1">
				  	<div class="videoWrapper">
			    		   <iframe width="560" height="315" src="//www.youtube.com/embed/bJsg587DxiM" frameborder="0" allowfullscreen></iframe>
      					</div>
					
					
				  </div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<a href="img/cer1.png" target="_blank"><img class="img-responsive" src="img/cer1.png"></a>
					
					</div>
					<div class="col-sm-6">
						<a href="img/cer2.png" target="_blank"><img class="img-responsive" src="img/cer2.png"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 margen1">
						<button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='img/cer3.png'">Ver Certificaciones</button>
					</div>
					<div class="col-sm-6 margen1">
						<button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='img/espe.png'">Especificaciones Técnicas</button>
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