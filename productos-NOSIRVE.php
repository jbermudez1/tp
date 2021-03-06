<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/tp.css">
        <link rel="stylesheet" type="text/css" href="css/medias.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    </head>
</head>

<body>

        <section id="raya">
<!--              <span class="navbar-toggle collapsed" data-target=".navbar-collapse" data-toggle="collapse" type="button">sss<</span>
 -->       </section>

        <header id="interior">
            <?php include('menuSuperiorInterior.php') ?>
        </header>
        <section class="container" >
            <div class="row">
                <div class="col-sm-3 lateral">
                        <nav id="menuLateral" class="muebelo">
                            <div class="panel">
                                <a class="manuLaretal-link" data-toggle="collapse" data-parent="#menuLateral" 
                                href="#poliuretano">
                                    <h4> Panel Poliuretano</h4>
                                </a>
                                <ul id="poliuretano" class="collapse manuLaretal-lista categoriaDeProducto subMenuLateral">
                                    <div class="poliuretanoCat">
                                        <h5>Panel de Construcción</h5>
                                   <li >
                                        <!-- FACHADA -->
                                        <a class="submenu" href="#construccionFachada" data-toggle="collapse" data-parent="#poliuretano">Fachada +</a>
                                            <ul id="construccionFachada" class="collapse subMenuLateral" >
                                                <li><a class="cargaPagina" data-producto="box" data-cat="poliuretano/construccionFachada">Box</a></li>
                                                <li><a >Top</a></li>
                                                <li><a >Mec</a></li>
                                                <li><a >Italop</a></li>
                                            </ul>

                                   <!--  -->
                                   <li >
                                        <a class="submenu" href="#poliuretanoCubierta" data-toggle="collapse" data-parent="#poliuretano" >Cubierta +</a>
                                        <ul id="poliuretanoCubierta" class="collapse subMenuLateral">
                                            <li><a class="cargaPagina"  data-producto="penta" data-cat="poliuretano/construccionCubierta">Penta</a></li>
                                            <li><a >Mono Penta</a></li>
                                            <li><a >Mec</a></li>
                                            <li><a >Italop</a></li>
                                        </ul>
                                   </li>
                               </div>
                                    <h5>AgroPanel</h5>                    
                                    
                                            <li><a class="cargaPagina" data-producto="penta" data-cat="poliuretano/agropanel" >Penta</a></li>
                                            <li><a >Mono Penta</a></li>
                                            <li><a >Mec</a></li>
                                            <li><a >Italop</a></li>
                                 
                                  
                                    <h5>Frigromec</h5>                    
                                       
                                            <li><a class="cargaPagina" data-producto="frigomecbt" data-cat="poliuretano/frigromec">Frigomec BT</a></li>
                                            <li><a >Mono Penta</a></li>
                                            <li><a >Mec</a></li>
                                            <li><a >Italop</a></li>
                                                   
                                </ul>
                                <!--  -->
                                <a class="manuLaretal-link" data-toggle="collapse" data-parent="#menuLateral" href="#lanaMineral">
                                <h4> Panel Lana Mineral</h4></a>
                                <ul id="lanaMineral" class="collapse manuLaretal-lista categoriaDeProducto">
                                    <h5>Construccion</h5> 
                                    <div class="construccion subMenuLateral">
                                                     <li><a class="cargaPagina" data-producto="pentaw" data-cat="lanaMinerak/construcion">Pebta W</a></li>
                                       <li>cuatro</li>
                                       <li>cinco</li>
                                    </div>
                                </ul>
                                <a class="manuLaretal-link" data-toggle="collapse" data-parent="#menuLateral" href="#perfiles">
                                <h4> Perfiles</h4></a>
                                <ul id="perfiles" class="collapse manuLaretal-lista subMenuLateral">
                                   <li><a class="cargaPagina" data-producto="canalu" data-cat="perfiles/-">Canal U</a></li>
                                   <li>cuatro</li>
                                   <li>cinco</li>
                                </ul>
                            </div>
                        </nav>
                </div>

                    <div id="" class="col-xs-12 col-sm-9 ">
                        <section id="detalleProductos">
                            Contenido...
                        </section>
                    </div>
            </div>
        </section>

   
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tp.js"></script>
    <script type="text/javascript">
    primerProductos();
    </script>

<!--     <footer>
        <?php include('footer.php') ?>
    </footer> -->
</body>

</html>
