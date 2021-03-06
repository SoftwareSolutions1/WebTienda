<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
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
                <div class="header_top_right">
                    <div class="search_box">
                        <span>Buscar</span>
                        <form>
                            <input type="text" value=""><input type="submit" value="">
                        </form>
                        <div class="clear"></div>
                    </div>
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
    <!------------End Header ------------>
    <div class="main">
        <div class="wrap">
            <div class="preview-page">
                <div class="section group">
                    <div class="cont-desc span_1_of_2">
                        <ul class="back-links">
                            <li><a href="#">Inicio</a> ::</li>
                            <li><a href="#">Pagina del producto </a> ::</li>
                            <li>Nobre del producto</li>
                            <div class="clear"> </div>
                        </ul>
                        <div class="product-details">	
                            <div class="grid images_3_of_2">
                                <ul id="etalage">
                                    <li>
                                        <a href="optionallink.html">
                                            <img class="etalage_thumb_image" src="images/preview-small-img1.png" />
                                            <img class="etalage_source_image" src="images/preview-large-img1.jpg" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="images/preview-small-img2.png"  />
                                        <img class="etalage_source_image" src="images/preview-large-img2.jpg" title="" />
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="images/preview-small-img3.png"  />
                                        <img class="etalage_source_image" src="images/preview-large-img3.jpg" />
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="images/preview-small-img4.png" />
                                        <img class="etalage_source_image" src="images/preview-large-img4.jpg" />
                                    </li>
                                </ul>
                            </div>
                            <div class="desc span_3_of_2">
                                <h2>Whirlpool LTE5243D 3.4 CuFt.... </h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>					
                                <div class="price">
                                    <p>Precio: <span>$839.93</span></p>
                                </div>
                                <div class="available">
                                    <ul>
                                        <li><span>Modelo:</span> &nbsp; Modelo 1</li>
                                        <li><span>Peso para el envío:</span>&nbsp; 75.58 kg</li>
                                        <li><span>Unidades en Stock:</span>&nbsp; 566</li>
                                    </ul>
                                </div>
                                <div class="share-desc">
                                    <div class="share">
                                        <p>Número de unidades :</p><input type="number" class="text_box" type="text" value="1" min="1" />				
                                    </div>
                                    <div class="button"><span><a href="#">Añadir al carrito</a></span></div>					
                                    <div class="clear"></div>
                                </div>
                                <div class="wish-list">
                                    <ul>
                                        <li class="wish"><a href="#">Añadir a la lista de deseos</a></li>
                                        <li class="compare"><a href="#">Añadir a comparar</a></li>
                                    </ul>
                                </div>
                                <div class="colors-share">
                                    <div class="color-types">
                                        <h4>Colores disponibles</h4>
                                        <form class="checkbox-buttons">
                                            <ul>
                                                <li><input id="r1" name="r1" type="radio"><label for="r1" class="grey"> </label></li>
                                                <li><input id="r2" name="r1" type="radio"><label for="r2" class="blue"> </label></li>
                                                <li><input id="r3" name="r1" type="radio"><label class="white" for="r3"> </label></li>
                                                <li><input id="r4" name="r1" type="radio"><label class="black" for="r4"> </label></li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="social-share">
                                        <h4>Compartir producto</h4>
                                        <ul>
                                            <li><a class="share-face" href="#"> </a></li>
                                            <li><a class="share-twitter" href="#"> </a></li>
                                            <li><a class="share-google" href="#"> </a></li>
                                            <li><a class="share-rss" href="#"> </a></li>
                                            <div class="clear"> </div>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="product_desc">	
                            <div id="horizontalTab">
                                <ul class="resp-tabs-list">
                                    <li>Presupuesto</li>
                                    <li>Etiquetas del producto</li>
                                    <li>Evaluación de productos</li>
                                    <div class="clear"></div>
                                </ul>
                                <div class="resp-tabs-container">
                                    <div class="product-specifications">
                                        <ul>
                                            <li><span class="specification-heading">Tipo de cuerpo</span> <span>Metal</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Spin Speed (rpm)</span> <span>0/400/800/1000/1200</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Machine weight (kg)</span> <span>75</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Wash System</span> <span>Tumble wash</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Door diameter (mm)</span> <span>300</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Dimensions (w*d*h) without packing</span> <span>595x595x850</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Power Supply</span> <span>230V, 50Hz, 16Amps</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Motor (Watts)</span> <span>440 for Wash/490 for Spin</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Drum basket</span> <span>stainless steel</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Adjustable Feet</span> <span>4 </span><div class="clear"></div></li>
                                        </ul>
                                    </div>

                                    <div class="product-tags">
                                        <p>Añada sus etiquetas para identificar sus productos seleccionados.</p>
                                        <h4>Añadir sus etiquetas :</h4>
                                        <div class="input-box">
                                            <input type="text" value="">
                                        </div>
                                        <div class="button"><span><a href="#">Agregar etiquetas</a></span></div>
                                    </div>	

                                    <div class="review">
                                        <ul>
                                            <li>Precio : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div>
                                            </li>
                                            <li>Valor : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
                                            <li>Calidad : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
                                        </ul>
                                        <div class="your-review">
                                            <h4>¿Cómo califica a este producto ?</h4>
                                            <p>Escriba su propia opinión ?</p>
                                            <form>
                                                <div>
                                                    <span><label>Usuario<span class="red">*</span></label></span>
                                                    <span><input type="text" value=""></span>
                                                </div>
                                                <div><span><label>Resumen de tu opinión<span class="red">*</span></label></span>
                                                    <span><input type="text" value=""></span>
                                                </div>						
                                                <div>
                                                    <span><label>Opinión<span class="red">*</span></label></span>
                                                    <span><textarea> </textarea></span>
                                                </div>
                                                <div>
                                                    <span><input type="submit" value="Enviar Opnión"></span>
                                                </div>
                                            </form>
                                        </div>			
                                        <script type="text/javascript">
        /* place inside document ready function */
        $(".rating").starRating({
            minus: true // step minus button
        });
                                        </script>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightsidebar span_3_of_1 sidebar">
                        <h3>productos populares</h3>
                        <ul class="popular-products">
                            <li>
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">Mas información</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </li>
                            <li>
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">Mas información</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </li>
                            <li>
                                <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
                                <a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="preview.html">Mas información</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </li>
                        </ul>

                        <div class="community-poll">
                            <h3>Comunidad</h3>
                            <p>¿Cuál es la razón principal para que usted compre productos en línea?</p>
                            <div class="poll">
                                <form>
                                    <ul>
                                        <li>
                                            <input type="radio" name="vote" class="radio" value="1">
                                            <span class="label"><label>el envío y la entrega más conveniente </label></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="vote" class="radio" value="2">
                                            <span class="label"><label for="vote_2">Precios más bajo</label></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="vote" class="radio" value="3">
                                            <span class="label"><label for="vote_3">La elección más grande</label></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="vote" class="radio" value="5">
                                            <span class="label"><label for="vote_5">Seguridad de los pagos </label></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="vote" class="radio" value="6">
                                            <span class="label"><label for="vote_6">30 días de garantía de devolución de dinero </label></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="vote" class="radio" value="7">
                                            <span class="label"><label for="vote_7">Otro.</label></span>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_top">
            <div class="wrap">
                <h3>Visto recientemente</h3>
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
