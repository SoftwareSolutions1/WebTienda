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
    //Carmen la parte que afecta nuestro menu de index son estos tres link que agregaste para el modal de registro y login pudieras ver tu que sabes cuales 
    son vitales y cual no esta causan el problema en general si los eliminas guaras y corres el menu vuelve a su estado natural.
    los scripts, metas y links siguientes quedan en funcion esos no se modificaran.
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
                            Login
                        </button>
                    </div>
                </div>
                <div class="header_top_right">
                    <div>
                        <button type="submit" class="mybutton " data-toggle="modal" data-target="#ventana2">
                            Registro
                        </button>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_top_right">
                    <div class="search_box">
                        <span>Search</span>
                        <form>
                            <input type="text" value=""><input type="submit" value="">
                        </form>
                        <div class="clear"></div>
                    </div>
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
                        <a href="index.php">Inicio</a>
                    </li>
                    <li  class="test">
                        <a href="#">Cómputo</a>
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
                        <a href="#">Impresion</a>
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
                        <a href="#">Gamers</a>
                        <ul>
                            <li><a href="Consolas.php">Consolas</a></li>
                            <li><a href="Videojuegos.php">Videojuegos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Software</a>
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
                        <a href="Soporte.php">Soporte</a>
                        <ul>

                    </li>

                    </li>

                </ul>
                </li>

                <li>
                    <a href="contact.php">Contactanos</a>
                </li>
                </ul>
                <span class="left-ribbon"> </span> 
                <span class="right-ribbon"> </span>    
            </div>
   

    <div class="header_bottom">
        <div class="slider-text">
            <h2>Lorem Ipsum Placerat <br/>Elementum Quistue Tunulla Maris</h2>
            <p>Vivamus vitae augue at quam frigilla tristique sit amet<br/> acin ante sikumpre tisdin.</p>
            <a href="#">Sitamet Tortorions</a>
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
                    <h3>Latest Products</h3>
                </div>
                <div class="line"> </div>
                <div class="wrap">
                    <div class="ocarousel_slider">  
                        <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
                            <div class="ocarousel_window">
                                <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
                                <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
                                <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
                                <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
                                <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
                                <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
                                <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
                                <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
                                <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
                                <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
                                <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
                                <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
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
                                <h3>Browse All Categories</h3>
                                <li><a href="#">Appliances</a></li>
                                <li><a href="#">Sports Equipments</a></li>
                                <li><a href="#">Computers & Electronics</a></li>
                                <li><a href="#">Office supplies</a></li>
                                <li><a href="#">Health & Beauty</a></li>
                                <li><a href="#">Home & Garden</a></li>
                                <li><a href="#">Apparel</a></li>
                                <li><a href="#">Toys & Games</a></li>
                                <li><a href="#">Automotive</a></li>
                            </ul>
                        </div>		
                        <div class="buters-guide">
                            <h3>Buyers Guide</h3>
                            <p><span>We want you to be happy with your purchase.</span></p>	
                            <p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
                        </div>	
                        <div class="add-banner">
                            <img src="images/camera.png" alt="" />
                            <div class="banner-desc">
                                <h4>Electronics</h4>
                                <a href="#">More Info</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="add-banner add-banner2">
                            <img src="images/computer.png" alt="" />
                            <div class="banner-desc">
                                <h4>Computers</h4>
                                <a href="#">More Info</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="content-bottom-right">
                        <h3>Browse All Categories</h3>
                        <div class="section group">
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="section group">
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="section group">
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <div class="grid_1_of_4 images_1_of_4">
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">More Info</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product-articles">
                            <h3>Browse All Categories</h3>
                            <ul>
                                <li>
                                    <div class="article">
                                        <p><span>Aenean vitae massa dolor</span></p>
                                        <p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
                                        <p><a href="#">+ Read Full article</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="article">
                                        <p><span>Phasellus sollicitudin consectetur</span></p>
                                        <p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
                                        <p><a href="#">+ Read Full article</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        >>>>>>> origin/master
    </div>
</div>
<!------------End Header ------------>
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="wrap">
                <h3>Latest Products</h3>
            </div>
            <div class="line"> </div>
            <div class="wrap">
                <div class="ocarousel_slider">  
                    <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
                        <div class="ocarousel_window">
                            <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
                            <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
                            <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
                            <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
                            <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
                            <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
                            <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
                            <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
                            <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
                            <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
                            <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
                            <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
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
                            <h3>Browse All Categories</h3>
                            <li><a href="#">Appliances</a></li>
                            <li><a href="#">Sports Equipments</a></li>
                            <li><a href="#">Computers & Electronics</a></li>
                            <li><a href="#">Office supplies</a></li>
                            <li><a href="#">Health & Beauty</a></li>
                            <li><a href="#">Home & Garden</a></li>
                            <li><a href="#">Apparel</a></li>
                            <li><a href="#">Toys & Games</a></li>
                            <li><a href="#">Automotive</a></li>
                        </ul>
                    </div>		
                    <div class="buters-guide">
                        <h3>Buyers Guide</h3>
                        <p><span>We want you to be happy with your purchase.</span></p>	
                        <p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
                    </div>	
                    <div class="add-banner">
                        <img src="images/camera.png" alt="" />
                        <div class="banner-desc">
                            <h4>Electronics</h4>
                            <a href="#">More Info</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="add-banner add-banner2">
                        <img src="images/computer.png" alt="" />
                        <div class="banner-desc">
                            <h4>Computers</h4>
                            <a href="#">More Info</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="content-bottom-right">
                    <h3>Browse All Categories</h3>
                    <div class="section group">
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>					 
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section group">
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>					 
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section group">
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>					 
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                            <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$839.93 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="preview.html">More Info</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="product-articles">
                        <h3>Browse All Categories</h3>
                        <ul>
                            <li>
                                <div class="article">
                                    <p><span>Aenean vitae massa dolor</span></p>
                                    <p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
                                    <p><a href="#">+ Read Full article</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="article">
                                    <p><span>Phasellus sollicitudin consectetur</span></p>
                                    <p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
                                    <p><a href="#">+ Read Full article</a></p>
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
<div class="footer">
    <div class="wrap">	
        <div class="copy_right">
            <p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
        </div>	
        <div class="footer-nav">
            <ul>
                <li><a href="#">Terms of Use</a> : </li>
                <li><a href="#">Privacy Policy</a> : </li>
                <li><a href="contact.html">Contact Us</a> : </li>
                <li><a href="#">Sitemap</a></li>
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

