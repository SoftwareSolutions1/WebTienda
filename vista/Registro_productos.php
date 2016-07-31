<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tienda de tecnología | Home :: w3layouts</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/etalage.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
        <script src="js/jquery.openCarousel.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });
        </script>		
        <link rel="stylesheet" href="css/etalage.css">
        <script src="js/jquery.etalage.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });

            });
        </script>
        <script src="js/star-rating.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="header">
            <div class="wrap">
                <div class="header_top">
                    <div class="logo">
                        <a href="index.php"><img src="images/Axum_Logo.png" alt="" /></a>
                    </div>
                    <div class="clear"></div>
                </div> 
                <div class="navigation">
                    <a class="toggleMenu" href="#">Menu</a>
                    <ul class="nav">
                        <li>
                            <a href="index.php"> . . . . . .  .Inicio . . . . . . .</a> 
                        </li>
                        <li  class="test">
                            <a href="#"> . . . . . .  .Cómputo . . . . . . .</a>
                            <ul>
                                <li>
                                    <a href="#">Laptop</a>
                                    <ul>
                                        <li><a href="Lenovo.php">Lenovo</a></li>
                                        <li><a href="Hp.php">HP</a></li>
                                        <li><a href="Mac.php">MAC</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Tablets</a>
                                    <ul>
                                        <li><a href="Ipads.php">IPADS</a></li>
                                        <li><a href="Androidtabs.php">Android</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a>Monitores</a>
                                    <ul>
                                        <li><a href="Monhp.php">HP</a></li>
                                        <li><a href="Monlg.php">LG</a></li>
                                        <li><a href="Monacer.php">Acer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> . . . . . . . Impresion . . . . . . .</a>
                            <ul>
                                <li>
                                    <a href="#">Laser</a>
                                    <ul>
                                        <li><a href="Laserhp.php">HP</a></li>
                                        <li><a href="Laserbrother.php">Brother</a></li>
                                        <li><a href="Laserdell.php">Dell</a></li>
                                        <li><a href="Laserepson.php">Epson</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Inyección de tinta</a>
                                    <ul>
                                        <li><a href="Tintahp.php">HP</a></li>
                                        <li><a href="Tintacanon.php">Canon</a></li>
                                        <li><a href="Tintaepson.php">Epson</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> . . . . . . . Gamers . . . . . . .</a>
                            <ul>
                                <li><a href="Consolas.php">Consolas</a></li>
                                <li><a href="Videojuegos.php">Videojuegos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> . . . . .  . . Software . . . . . . .</a>
                            <ul>
                                <li>
                                    <a href="#">Windows</a>
                                    <ul>
                                        <li><a href="Office.php">Office365</a></li>
                                        <li><a href="Licenciaswindows.php">Licencias</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Antivirus</a>
                                    <ul>
                                        <li><a href="Antivirus.php">Descargas</a></li>
                                        <li><a href="Licenciasantivirus.php">Licencias</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="Soporte.php"> . . . . . . Soporte . . . . . .</a>
                            <ul>

                        </li>

                        </li>

                    </ul>
                    </li>

                    <li>
                        <a href="contact.php"> . . . . . . Contactanos . . . . . .</a>
                    </li>
                    </ul>
                    <span class="left-ribbon"> </span> 
                    <span class="right-ribbon"> </span>    
                </div>
            </div>
        </div>
        <div class="main">
            <div class="wrap">
                <div class="container">
                    <section class="main row">
                        <div class="col-md-6">

                            <form role="form" action="" method="POST">

                                <div class="form-group">
                                    <label for="option" class="control-label">Selecciona una categoría</label>
                                    <select class="form-control" name="" id="opcion">
                                        <option value="">Computo</option>
                                        <option value="">Impresión</option>
                                        <option value="">Gamers</option>
                                        <option value="">Software</option>
                                        <option value="">Redes</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="id">Código </label>
                                    <input class="form-control" type="text" id="codigo" name="codigo" placeholder="******" autofocus="autofocus"></input>
                                </div>


                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre"></input>
                                </div>

                                <div class="form-group">
                                    <label for="cantidad">Cantidad</label>
                                    <input class="form-control" type="text" id="cantidad" name="cantidad" placeholder="10"></input>
                                </div>


                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion" placeholder="Descripción"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="imagen_pro">Adjuntar imagen del producto</label>
                                    <input type="file" id="imagen_pro">
                                    <p class="help-block">Imagen en formato .png.</p>
                                </div>
                                <div class="pull-right">
                                    <button  type="submit" class="btn btn-default active">Registrar</button>
                                    <p>Verificar los campos antes de esta acción.</p>
                                </div>
                            </form>
                            <div class="pull-right">
                                    <button  type="submit" class="btn btn-default active">Salir</button>
                                </div>
                        </div>

                        <div class="col-md-6">

                            <article>
                                <img src="images/products-icon.png"  class="img-responsive center-block" alt="" >

                            </article>



                        </div>
                </div>
            </div>
            <div class="footer">
                <div class="wrap">	
                    <div class="copy_right">
                        <p>Copy rights (c). All rights Reseverd | Axum Tecnology  <a href="http://AxumTecnology.com" target="_blank">Power by Software Solutions</a> </p>
                    </div>	
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Terminos de uso</a> : </li>
                            <li><a href="#">Politica de privacidad</a> : </li>
                            <li><a href="contact.php">Contactanos</a> : </li>
                            <li><a href="contact.php">Nuestra ubicación</a></li>
                        </ul>
                    </div>		
                </div>
            </div>
            <script type="text/javascript">
            $(document).ready(function () {
                $().UItoTop({easingType: 'easeOutQuart'});

            });
            </script>
            <a href="#" id="toTop"> </a>
            <script type="text/javascript" src="js/navigation.js"></script>


    </body>
</html>
