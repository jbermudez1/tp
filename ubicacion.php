<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/tp.css">
        <link rel="stylesheet" type="text/css" href="css/medias.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui"> 
        <title>TP</title>
    </head>
<body>
    <section id="raya">
    </section>

        <header id="interior">
            <?php include('menuSuperiorInterior.php') ?>
        </header>
        <section class="container " >
              <div class="nombreProducto">
                <h2>Ubicación</h2><span class="rutaProducto">Sucursal Cualiacán Sin.</span>
              </div>
           <div class="row">
                <div id="mapa" class="col-sm-8">Cargando ubicación...</div>
                <div  id="mapados" class="col-sm-4">
                    <p class="direccion">
                        Rio Nazas #1265Col Los Pinos Cp 80128 Culiacán Sinaloa.<br>
                        Tel: 714 44 33 y 714 44 23
                    </p>
                    <p><strong>Dejenos un mensaje</strong></p>

                    <form role="form">
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                      </div>
                       <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                       <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
                      </div>
                       <div class="form-group">
                            <textarea class="form-control" placeholder="Mensaje" rows="3"></textarea>
                      </div>
                      <button type="button" class="btn btn-success">Enviar</button>

                </div>


           </div>
        </section>

   
    <!-- jQuery Version 1.11.0 -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <script src="js/jquery-1.11.0.js"></script>
        <script src="js/quojs/quo.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tp.js"></script>
    <script type="text/javascript">
    arrancaGeo();
    </script>

     <footer>
        <?php include('footer.php') ?>
    </footer> 

</body>

</html>
