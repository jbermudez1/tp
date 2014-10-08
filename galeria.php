<!DOCTYPE html>
<html lan="es">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/tp.css">
		<link rel="stylesheet" type="text/css" href="css/medias.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	</head>

	<body>
		<section id="raya"></section>

		<header id="interior">
            <?php include('menuSuperiorInterior.php') ?>
		</header>
	<section class="container">
		<div class="nombreProducto">
                <h2>Galería</h2><span class="rutaProducto"></span>
                <hr/>
        </div>
        <span class="rutaProducto">Instalación Panel Top</span><br><br>
		<div class="row">
			<div class="col-xs-3">
				<a href="img/galeria/top/top1.jpg" rel="shadowbox"><img class="img-responsive" src="img/galeria/top/top1.jpg" /></a>
			</div>
			<div class="col-xs-3">
				<a href="img/galeria/top/top2.jpg" rel="shadowbox"><img class="img-responsive" src="img/galeria/top/top2.jpg" /></a>
			</div>
			<div class="col-xs-3">
				<a href="img/galeria/top/top3.jpg" rel="shadowbox"><img class="img-responsive" src="img/galeria/top/top3.jpg" /></a>
			</div>
			<div class="col-xs-3">
				<a href="img/galeria/top/top4.jpg" rel="shadowbox"><img class="img-responsive" src="img/galeria/top/top4.jpg" /></a>
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
        <script type="text/javascript" src="shadowbox/shadowbox.js"></script>
        <script type="text/javascript">
		Shadowbox.init();
		</script>

	</body>


</html>