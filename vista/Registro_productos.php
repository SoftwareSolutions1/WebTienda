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
        
        <script type="text/javascript">
            $(function() {
                //Validacion del Formulario de Registro
                $("#registroArticuloForm").validate({
                    rules: {
                        codigo: {
                            required: true,
                            minlength: 2
                        },
                        nombre: {
                            required: true,
                            minlength: 2
                        },
                        cantidad: {
                            required: true,
                            minlength: 2
                        },
                        pesoEnvio: {
                            required: true,
                        },
                        modelo: {
                            required: true,
                        },
                        version: {
                            required: true,
                        },
                        descripcion: {
                            required: true,
                            minlength: 6
                        },
                        codigoProducto: {
                            required: true,
                            minlength: 2
                        }
                    },
                   messages: {
                        codigo: {
                            required: "Ingresa el codigo por favor",
                            minlength: "El codigo no puede ser menor a 2 caracteres."
                        },
                        nombre: {
                            required: "Ingresa la nombre por favor",
                            minlength: "El nmobre no puede ser menor a 2 caracteres."
                        },
                        cantidad: {
                            required: "Este campo no puede estar vacio",
                            minlength: "El este campo no puede ser menor a 2 caracteres."
                        },
                        pesoEnvio: {
                            required: "Este campo no puede estar vacio",
                        },
                        modelo: {
                            required: "Ingresa el modelo por favor",
                        },
                        version: {
                            required: "Ingresa un correo electronico por favor",
                        },
                        descripcion: {
                            required: "Ingresa Descripción de producto por favor",
                            minlength: "La contraseña no puede ser menor a 6 caracteres."
                        },                  
                        codigoProducto: {
                            required: "Ingresa el codigo del producto por favor",
                            minlength: "el codigo no puede ser menor a 2 caracteres."
                        },
                    }
                });
            });

//            function validarUsuario() {
//                $.ajax({
//                    url: 'app/control/usuarioDisponible.php',
//                    type: 'POST',
//                    data: 'usuario=' + $("#usuario").val(),
//                    success: function(data) {
//                        var html;
//                        //called when successful
//                        if (data === "true") {
//                            html = "<p>Nombre de usuaria disponible</p><img src='images/checked.gif'/>";
//                            $("#usuarioValidacion").val(true);
//                        } else {
//                            html = "<p>Nombre de usuaria no disponible</p><img src='images/unchecked.gif'/>";
//                            $("#usuarioValidacion").val(false);
//                        }
//                        $('#usarioDispoble').html(html);
//                    },
//                    error: function(e) {
//                        //called when there is an error
//                        //console.log(e.message);
//                    }
//                });
//            }

//            function validarCorreo() {
//                $.ajax({
//                    url: 'app/control/correoDisponible.php',
//                    type: 'POST',
//                    data: 'email=' + $("#email").val(),
//                    success: function(data) {
//                        var html;
//                        //called when successful
//                        if (data === "true") {
//                            html = "<img src='images/checked.gif'/>";
//                            $("#correoValidacion").val(true);
//                        } else {
//                            html = "<p>Correo ya registrado</p><img src='images/unchecked.gif'/>";
//                            $("#correoValidacion").val(false);
//                        }
//                        $('#correoDispoble').html(html);
//                    },
//                    error: function(e) {
//                        //called when there is an error
//                        //console.log(e.message);
//                    }
//                });
//            }
        </script>
        
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
                <a href="index.php"><font color="black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Inicio &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></a> 
            </li>
            <li  class="test">
                <a href="#"><font color="black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cómputo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></a>
                <ul>
                    <li>
                        <a href="#"><font color="black">Laptop</font></a>
                        <ul>
                            <li><a href="Lenovo.php"><font color="black">Lenovo</font></a></li>
                            <li><a href="Hp.php"><font color="black">HP</font></a></li>
                            <li><a href="Mac.php"><font color="black">MAC</font></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><font color="black">Tablets</font></a>
                        <ul>
                            <li><a href="Ipads.php"><font color="black">IPADS</font></a></li>
                            <li><a href="Androidtabs.php"><font color="black">Android</font></a></li>
                        </ul>
                    </li>
                    <li>
                        <a><font color="black">Monitores</font></a>
                        <ul>
                            <li><a href="Monhp.php"><font color="black">HP</font></a></li>
                            <li><a href="Monlg.php"><font color="black">LG</font></a></li>
                            <li><a href="Monacer.php"><font color="black">Acer</font></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><font color="black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Impresión &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></a>
                <ul>
                    <li>
                        <a href="#"><font color="black">Laser</font></a>
                        <ul>
                            <li><a href="Laserhp.php"><font color="black">HP</font></a></li>
                            <li><a href="Laserbrother.php"><font color="black">Brother</font></a></li>
                            <li><a href="Laserdell.php"><font color="black">Dell</font></a></li>
                            <li><a href="Laserepson.php"><font color="black">Epson</font></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><font color="black">Inyección de tinta</font></a>
                        <ul>
                            <li><a href="Tintahp.php"><font color="black">HP</font></a></li>
                            <li><a href="Tintacanon.php"><font color="black">Canon</font></a></li>
                            <li><a href="Tintaepson.php"><font color="black">Epson</font></a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><font color="black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Gamers  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></a>
                <ul>
                    <li><a href="Consolas.php"><font color="black">Consolas</font></a></li>
                    <li><a href="Videojuegos.php"><font color="black">Videojuegos</font></a></li>
                </ul>
            </li>
            <li>
                <a href="#"><font color="black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Software &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></a>
                <ul>
                    <li>
                        <a href="#"><font color="black">Windows</font></a>
                        <ul>
                            <li><a href="Office.php"><font color="black">Office365</font></a></li>
                            <li><a href="Licenciaswindows.php"><font color="black">Licencias</font></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><font color="black">Antivirus</font></a>
                        <ul>
                            <li><a href="Antivirus.php"><font color="black">Descargas</font></a></li>
                            <li><a href="Licenciasantivirus.php"><font color="black">Licencias</font></a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <a href="Soporte.php"><font color="black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Soporte &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></a>                
                <ul>

            </li>

            </li>

        </ul>
        </li>

        <li>
                <a href="contact.php"><font color="black">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Contactanos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></a>                
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

                            <form role="form" id="registroArticuloForm" action="../controlador/registArtiSys.php" method="POST">

                                <div class="form-group">
                                    <label for="option" class="control-label">Selecciona una categoría</label>
                                    <select class="form-control" name="opcion" id="opcion">
                                        <option value="computo">Computo</option>
                                        <option value="impresion">Impresión</option>
                                        <option value="gamers">Gamers</option>
                                        <option value="software">Software</option>
                                        <option value="soporte">Soporte</option>
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
                                    <label for="id">Peso para el envio </label>
                                    <input class="form-control" type="text" id="pesoEnvio" name="pesoEnvio" placeholder="" autofocus="autofocus"></input>
                                </div>
                                <div class="form-group">
                                    <label for="id">Modelo </label>
                                    <input class="form-control" type="text" id="modelo" name="modelo" placeholder="modelo" autofocus="autofocus"></input>
                                </div>
                                <div class="form-group">
                                    <label for="id">Version </label>
                                    <input class="form-control" type="text" id="version" name="version" placeholder="******" autofocus="autofocus"></input>
                                </div>
                                <div class="form-group">
                                    <label for="id">Precio </label>
                                    <input class="form-control" type="text" id="precio" name="precio" placeholder="******" autofocus="autofocus"></input>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="id">Código de producto </label>
                                    <input class="form-control" type="text" id="codigoProducto" name="codigoProducto" placeholder="******" autofocus="autofocus"></input>
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
                                <form action="../vista/indexAdmin.php">
                                    <button  type="submit"  class="btn btn-default active">Salir</button>
                                    </form>
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
