<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
    <title>Tienda de tecnología | Home :: w3layouts</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/etalage.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
    <script src="js/jquery.openCarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>

</head>
<body>
    <div class="header">
        <div class="wrap">
            <div class="header_top">
                <div class="logo">
                    <a href="index.php"><img src="images/Axum_Logo.png" /></a>
                </div>
                <div class="header_top_right">
                    <div>
                        <button type="button" class="mybutton" data-toggle="modal" data-target="#ventana">
                            <font color="black">Ingresa</font>
                        </button>
                    </div>
                </div>
                <div class="header_top_right">
                    <div>
                        <button type="submit" class="mybutton " data-toggle="modal" data-target="#ventana2">
                            <font color="black">Registro</font>
                        </button>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_top_right">
                    <div style="font-size: 25px; color:#e44f2b;margin-top: 0px; font-weight: normal; ">
                        <h2>El usuario o contraseña son incorrectos, intenta de nuevo.&nbsp; &nbsp;</h2>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--modal de login--> 
                <div class="container">
                    <div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span arial-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                    <h4 class="modal-title" style="text-align: center;" id="ModalLabel">Inicio de sesión</h4>
                                </div>
                                <div class="modal-body">
                                    <Form action="../controlador/loginSys.php" method="POST">
                                        <div class="form-group">
                                            <label for="usuario">Usuario</label>
                                            <input class="form-control" type="text" id="userLogin" name="userLogin" placeholder="Usuario"></input>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input class="form-control" type="password" id="passlogin" name="passlogin" placeholder="password"></input>
                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Inciar Sesión</button>
                                        </div>
                                    </Form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--modal de registro-->
                <div class="container">
                    <div class="modal fade" id="ventana2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span arial-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                    <h4 class="modal-title" style="text-align: center;" id="ModalLabel">Registrarse</h4>
                                </div>

                                <div class="modal-body">

                                    <Form action="../controlador/registSys.php" method="POST">

                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder=""></input>
                                        </div>

                                        <div class="form-group">
                                            <label for="usuario">Apellido Paterno</label>
                                            <input class="form-control" type="text" id="apell_pat" name="apell_pat"></input>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Apellido Materno</label>
                                            <input class="form-control" type="text" id="apell_mat" name="apell_mat"></input>
                                        </div>

                                        <div class="form-group">
                                            <label for="usuario">Usuario</label>
                                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="password"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email: </label>
                                            <input class="form-control" type="text" id="email" name="email" placeholder="Ejem: carlos@mail.com" autofocus="autofocus"></input>
                                        </div>



                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Registrarse</button>
                                        </div>
                                    </Form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div> <div
            </div>
        </div>
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


    <div class="header_bottom">
        <div class="slider-text">
            <h2>Promociones <br/>Ofertas</h2>
            <p>Descuentos<br/> Junio!!</p>
            <a href="#">PRODUCTOS NUEVOS</a>
        </div>
        <div class="slider-img">
            <img src="images/slider-img.png" alt="" />
        </div>
        <div class="clear"></div>
    </div>

</div>

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="wrap">
                <h3>Nuestros ultimos productos</h3>
            </div>
            <div class="line"> </div>
            <div class="wrap">
                <div class="ocarousel_slider">  
                    <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
                        <div class="ocarousel_window">
                            <a href="HP.php" title="img1"> <img src="images/banerLastProduct/HPSP133.jpg" alt="" /><p><font color="black">Laptop HP</font></p></a>
                            <a href="Mac.php" title="img2"> <img src="images/banerLastProduct/HPSX360131.png" alt="" /><p><font color="black">Laptop HP</font></p></a>
                            <a href="#" title="img3"> <img src="images/banerLastProduct/HPSX360132.png" alt="" /><p><font color="black">Laptop HP</font></p></a>
                            <a href="Lenovo.php" title="img4"> <img src="images/banerLastProduct/HPSX3603.png" alt="" /><p><font color="black">Laptop HP</font> </p></a>
                            <a href="#" title="img5"> <img src="images/banerLastProduct/JVCLTHD.png" alt="" /><p><font color="black">Pantalla JVCLHD</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/JVCLTHD2.png" alt="" /><p><font color="black">Pantalla JVCLHD</font></p></a>
                            <a href="#" title="img1"> <img src="images/banerLastProduct/KDL-50W800C2.png" alt="" /><p><font color="black">Pantalla KDL</font></p></a>
                            <a href="#" title="img2"> <img src="images/banerLastProduct/LEDTV32HD.png" alt="" /><p><font color="black">Pantalla LEDTV</font></p></a>
                            <a href="#" title="img3"> <img src="images/banerLastProduct/LGLM76001.png" alt="" /><p><font color="black">Pantalla LG</font></p></a>
                            <a href="#" title="img4"> <img src="images/banerLastProduct/LGLM76003.png" alt="" /><p><font color="black">Pantalla LG</font></p></a>
                            <a href="#" title="img5"> <img src="images/banerLastProduct/OLG55SO.png" alt="" /><p><font color="black">Pantalla OLG</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/OLG55SO3.png" alt="" /><p><font color="black">Pantalla OLG</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/P55LUHD.png" alt="" /><p><font color="black">Pantalla</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/P65LHD.png" alt="" /><p><font color="black">Pantalla</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/PL43UST2.png" alt="" /><p><font color="black">Pantalla</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/PSTV80002.png" alt="" /><p><font color="black">Pantalla</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/PSTV80003.png" alt="" /><p><font color="black">Pantalla</font></p></a>
                            <a href="#" title="img6"> <img src="images/banerLastProduct/TLLCD40004.jpg" alt="" /><p><font color="black">Pantalla</font></p></a>
                        </div>
                        <span>           
                            <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
                            <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
                        </span>
                    </div>
                </div>  
            </div>    		
        </div>
        <div class="content_bottom">
            <div class="wrap">
                <div class="content-bottom-left">
                    <div class="categories">
                        <ul>
                            <h3><font color="black">Navegar en todas las categorías</font></h3>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="#">Computo</a></li>
                            <li><a href="#">Impresión</a></li>
                            <li><a href="#">Gamers</a></li>
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Soporte</a></li>
                            <li><a href="#">Buscar</a></li>
                            <li><a href="#">Contactanos</a></li>
                            <!--                                <li><a href="#"></a></li>-->
                        </ul>
                    </div>		
                    <div class="buters-guide">
                        <h3><font color="black">Guía de compradores</font></h3>
                        <p><span>Queremos que usted esté satisfecho con su compra.</span></p>	
                        <p>Por lo que estamos comprometidos a darle todas las herramientas necesarias para tomar la decisión correcta con el mínimo esfuerzo. </p>
                    </div>	
                    <div class="add-banner">
                        <img src="images/camera.png" alt="" />
                        <div class="banner-desc">
                            <h4>Electronicos</h4>
                            <a href="#"><font color="black">Mas iformación</font></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="add-banner add-banner2">
                        <img src="images/computer.png" alt="" />
                        <div class="banner-desc">
                            <h4>Laptops</h4>
                            <a href="#">Mas iformación</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="content-bottom-right">
                    <h3>Navegar en todas las categorías</h3>
                    <div class="section group">
                        <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="HP.php">&nbsp;Laptop HP SPECTRE 13.3&nbsp; </a></h4>
                                <a href="HP.php"><img src="images/banerLastProduct/HPSP133.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$19,999 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="HP.php">Mas Información</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="Mac.php">&nbsp;Laptop &nbsp;&nbsp;&nbsp; HP&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;SX360 &nbsp;&nbsp;&nbsp; </a></h4>
                            <a href="Mac.php"><img src="images/banerLastProduct/HPSX360131.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$18,900</span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="Mac.php">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="Lenovo.php">&nbsp;Laptop &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HP&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;X3603&nbsp;&nbsp;&nbsp;</a></h4>
                            <a href="Lenovo.php"><img src="images/banerLastProduct/HPSX3603.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$22,099 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="Lenovo.php">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Pantalla &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; JVCL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HD </a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/JVCLTHD.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$3,999 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section group">
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Pantalla&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TCL - LED 32D3260&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HD</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/TLLCD40004.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$4,199</span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>					 
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Pantalla&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Philips Smart TV Serie 8000 3D &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HD</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/PSTV80003.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$9,999 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Pantalla Led 43" Uhd Smart Tv 43Uf6900</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/PL43UST3.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$13,699</span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Pantalla 65" Led Ultra Hd 65H7B</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/P65LHD.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$84,999 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section group">
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">LG LM7600 Cinema Screen - Smart 3D</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/LGLM76001.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$18,999 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>					 
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Oled Lg 55 4K Smart Oled 55B6P</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/OLG55SO.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$74,999</span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Pantalla 55" Led Ultra Hd 55H9</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/P55LUHD.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$35,000</span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Led Full HD 3D Smart con Android TV W80C</a></h4>
                            <a href="preview.html"><img src="images/banerLastProduct/KDL-50W800C2.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$11,999 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="product-articles">
                        <h3>Navegar en todas las categorías</h3>
                        <ul>
                            <li>
                                <div class="article">
                                    <p><span>Aenean vitae massa dolor</span></p>
                                    <p>Esta pagina contiene derechos reservados por nuestro cliente para la proteccion de su informacion........</p>
                                    <p><a href="#">+ Ler articulo completo aqui.</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="article">
                                    <p><span>Phasellus sollicitudin consectetur</span></p>
                                    <p>Puede obtener nuestros temrins de uso y condifionces asi como la ´politoca privacidad para su seguirad.........</p>
                                    <p><a href="#">+ Ler articulo completo aqui.</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
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
                <li><a href="contact.html">Contactanos</a> : </li>
                <li><a href="#">Nuestra ubicación.</a></li>
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

