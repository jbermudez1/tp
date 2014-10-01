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
        <section class="container gris" >
            <div class="row">
                <div class="col-sm-4">
                        <nav id="menuLateral" class="muebelo" >
                            <div class="panel">
                                <a class="manuLaretal-link" data-toggle="collapse" data-parent="#menuLateral" 
                                href="#poliuretano">
                                    <h4> Panel Poliuretano</h4>
                                </a>
                                <ul id="poliuretano" class="collapse in manuLaretal-lista categoriaDeProducto subMenuLateral">
                                    <div class="poliuretanoCat">
                                        <h5>Panel de Construcción</h5>
                                   <li >
                                        <!-- FACHADA -->
                                        <a class="submenu" href="#construccionFachada" data-toggle="collapse" data-parent="#poliuretano">Fachada +</a>
                                            <ul id="construccionFachada" class="collapse subMenuLateral" >
                                                <li><a class="cargaPagina" data-producto="box" data-cat="poliuretano/construccionFachada">Box</a></li>
                                                <li><a class="cargaPagina" data-producto="top" data-cat="poliuretano/construccionFachada">Top</a></li>
                                                <li><a class="cargaPagina" data-producto="mec" data-cat="poliuretano/construccionFachada">Mec</a></li>
                                                <li><a class="cargaPagina" data-producto="italtop" data-cat="poliuretano/construccionFachada">Italop</a></li>
                                            </ul>

                                   <!--  -->
                                   <li >
                                        <a class="submenu" href="#poliuretanoCubierta" data-toggle="collapse" data-parent="#poliuretano" >Cubierta +</a>
                                        <ul id="poliuretanoCubierta" class="collapse subMenuLateral">
                                            <li><a class="cargaPagina"  data-producto="penta" data-cat="poliuretano/construccionCubierta">Penta</a></li>
                                            <li><a class="cargaPagina"  data-producto="monopenta" data-cat="poliuretano/construccionCubierta">Mono Penta</a></li>
                                            <li><a class="cargaPagina"  data-producto="monopentadeck" data-cat="poliuretano/construccionCubierta">Mono Penta Deck</a></li>
                                            <li><a class="cargaPagina"  data-producto="ter" data-cat="poliuretano/construccionCubierta">Ter</a></li>
                                            <li><a class="cargaPagina"  data-producto="monoter" data-cat="poliuretano/construccionCubierta">Mono Ter</a></li>
                                            <li><a class="cargaPagina"  data-producto="monoterdeck" data-cat="poliuretano/construccionCubierta">Mono Ter Deck</a></li>
                                            <li><a class="cargaPagina"  data-producto="tapajuntas" data-cat="poliuretano/construccionCubierta">Tapajuntas</a></li>
                                            <li><a class="cargaPagina"  data-producto="chapapenta" data-cat="poliuretano/construccionCubierta">Chapa Penta G5</a></li>
                                            <li><a >Italtap</a></li>
                                            <li><a >Monoitaltap</a></li>
                                            <li><a class="cargaPagina"  data-producto="italcoppo" data-cat="poliuretano/construccionCubierta">Italcoppo</a></li>
                                        </ul>
                                   </li>
                               </div>
                                    <h5>AgroPanel</h5>                    
                                    
                                            <li><a class="cargaPagina" data-producto="agroter" data-cat="poliuretano/agropanel" >Agroter</a></li>
                                            <li><a class="cargaPagina" data-producto="polipur" data-cat="poliuretano/agropanel">Polipur</a></li>
                                            <li><a class="cargaPagina" data-producto="agropenta" data-cat="poliuretano/agropanel">Agropenta</a></li>
                                            <li><a class="cargaPagina" data-producto="agrocoppo" data-cat="poliuretano/agropanel">Agrocoppo</a></li>
                                            <li><a >Agroitaltap</a></li>
                                            <li><a >Agromonoter</a></li>
                                            <li><a class="cargaPagina" data-producto="agrotapajuntas" data-cat="poliuretano/agropanel">Agrotapajuntas</a></li>
                                 
                                  
                                    <h5>Frigromec</h5>                    
                                       
                                            <li><a class="cargaPagina" data-producto="frigomecbt" data-cat="poliuretano/frigomec">Frigomec BT</a></li>
                                            <li><a class="cargaPagina" data-producto="frigomectp" data-cat="poliuretano/frigomec">Frigomec TP</a></li>
 
                                                   
                                </ul>
                                <!--  -->
                                <a class="manuLaretal-link" data-toggle="collapse" data-parent="#menuLateral" href="#lanaMineral">
                                <h4> Panel Lana Mineral</h4></a>
                                <ul id="lanaMineral" class="collapse manuLaretal-lista categoriaDeProducto">
                                    <h5>Construccion</h5> 
                                    <div class="construccion subMenuLateral">
                                        <li><a class="cargaPagina" data-producto="pentaw" data-cat="lanamineral/construccion">Penta W</a></li>
                                       <li><a class="cargaPagina" data-producto="topwfo" data-cat="lanamineral/construccion">Top W Fijación oculta</a></li>
                                       <li><a class="cargaPagina" data-producto="topwr" data-cat="lanamineral/construccion">Top WR</a></li>
                                       <li><a class="cargaPagina" data-producto="mecw" data-cat="lanamineral/construccion">Mec W</a></li>
                                       <li><a class="cargaPagina" data-producto="mecwr" data-cat="lanamineral/construccion">Mec WR</a></li> 
                                       <li><a class="cargaPagina" data-producto="pentawa" data-cat="lanamineral/construccion">Penta WA (acústico)</a></li>
                                       <li><a class="cargaPagina" data-producto="mecwa" data-cat="lanamineral/construccion">Mec WA acústico</a></li>
                                       <li><a class="cargaPagina" data-producto="topwa" data-cat="lanamineral/construccion">Top WA acústico</a></li>
                                    </div>
                                </ul>
                                <a class="manuLaretal-link" data-toggle="collapse" data-parent="#menuLateral" href="#perfiles">
                                <h4> Perfiles</h4></a>
                                <ul id="perfiles" class="collapse manuLaretal-lista subMenuLateral">
                                   <li><a class="cargaPagina" data-producto="canalu" data-cat="perfiles/">Canal U</a></li>
                                   <li><a class="cargaPagina" data-producto="esquineroint" data-cat="perfiles/">Esquinero Interior</a></li>
                                   <li><a class="cargaPagina" data-producto="esquineroext" data-cat="perfiles/">Esquinero Exterior</a></li>
                                   <li><a class="cargaPagina" data-producto="pijaspuntadebroca" data-cat="perfiles/">Pijas Punta de Broca</a></li>
                                   <li><a class="cargaPagina" data-producto="placasfijaciontecho" data-cat="perfiles/">Placas de Fijación para Techo</a></li>
                                   <li><a class="cargaPagina" data-producto="closure" data-cat="perfiles/">Closure</a></li>
                                   <li><a class="cargaPagina" data-producto="cumbrera" data-cat="perfiles/">Cumbrera</a></li>
                                </ul>
                                <a class="manuLaretal-link cargaPagina"  data-producto="colores" data-cat="colores">
                                <h4> Gama de colores</h4></a>
                            </div>

                        </nav>
                        </div>
         <!--    <div class="row"> -->
            
               
                    <div id="contenedorProductos" class="col-xs-12 col-sm-8 fblanco">
                        <section id="detalleProductos">
                            Contenido...
                        </section>
                    </div>
            </div>
        </section>

   
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
        <script src="js/quojs/quo.js"></script>

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
