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
    <!------------End Header ------------>
    <div class="main">
        <div class="wrap">
            <div class="preview-page">
                <div class="section group">
                    <div class="cont-desc span_1_of_2">
                        <ul class="back-links">
                            <li><a href="#">Inicio</a> ::</li>
                            <li><a href="#">Computo </a> ::</li>
                            <li>Pantalla 65" Led Ultra Hd 65H7B</li>
                            <div class="clear"> </div>
                        </ul>
                        <div class="product-details">	
                            <div class="grid images_3_of_2">
                                <ul id="etalage">
                                    <li>
                                        <a href="optionallink.html">
                                            <img class="etalage_thumb_image" src="images/HISENSE/PRODUCTO 15/P65LHD-short-1.jpg" />
                                            <img class="etalage_source_image" src="images/HISENSE/PRODUCTO 15/P65LHD-large-1.jpg" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="images/HISENSE/PRODUCTO 15/P65LHD1-small-2.jpg"  />
                                        <img class="etalage_source_image" src="images/HISENSE/PRODUCTO 15/P65LHD1-large-2.jpg" title="" />
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="images/HISENSE/PRODUCTO 15/P65LHD2-small-3.jpg"  />
                                        <img class="etalage_source_image" src="images/HISENSE/PRODUCTO 15/P65LHD2-large-3.jpg" />
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="images/HISENSE/PRODUCTO 15/P65LHD3-small-4.jpg" />
                                        <img class="etalage_source_image" src="images/HISENSE/PRODUCTO 15/P65LHD-large-1.jpg" />
                                    </li>
                                </ul>
                            </div>
                            <div class="desc span_3_of_2">
                                <h2>Pantalla 65" Led Ultra Hd 65H7B</h2>
                                <p>Pantalla Hisense 65" H7B LED Ultra HD 120 hz (3840*2160), Smart TV con Wi-Fi integrado para navegar con aplicaciones de opera store (netflix, you tube, accuwather, amazon instant video, opera browser, clarovideo (tbd), facebook, twitter, spotify, sugarsync, vimeo, pandora, dropbox, fitness, ap news), 4 puertos HDMI, 3 puerto USB, 1 puerto de salida de audio óptico digital</p>					
                                <div class="price">
                                    <p>Precio: <span>$84,999</span></p>
                                </div>
                                <div class="available">
                                    <ul>
                                        <li><span>Modelo:</span> &nbsp; P65LHD</li>
                                        <li><span>Peso para el envío:</span>&nbsp;30 kg</li>
                                        <li><span>Unidades en Stock:</span>&nbsp; 10</li>
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
                                            <li><span class="specification-heading">Tipo de cuerpo</span> <span>Hecho a mano con aluminio durable y fibra de carbono, este portátil increíblemente delgada redefine la perfección. teclado retroiluminado para el trackpad de vidrio</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Memoria Ram</span> <span>8 GB</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Disco Duro</span> <span>512 GB</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Procesador</span> <span>6ª generación del procesador Intel® Core ™ i</span><div class="clear"></div></li>
                                            <li><span class="specification-heading">Dimensiones</span> <span>10.4 mm | 2.45 lbs</span><div class="clear"></div></li>
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
                                <h4><a href="Hp.php">&nbsp;Laptop HP SPECTRE 13.3&nbsp; </a></h4>
                                <a href="Hp.php"><img src="images/banerLastProduct/HPSP133.jpg" alt="" /></a>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees line-through">$20,599 </span> &nbsp;<span class="rupees">$19,999 </span></p>
                                    </div>
                                    <div class="add-cart">								
                                        <h4><a href="Hp.php">Mas Información</a></h4>
                                    </div>
                                    <div class="clear"></div>
                                </div>					 
                            </li>
                            <li>
                                <h4><a href="Mac.php">&nbsp;Laptop &nbsp;&nbsp;&nbsp; HP&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;SX360 &nbsp;&nbsp;&nbsp; </a></h4>
                                <a href="Mac.php"><img src="images/banerLastProduct/HPSX360131.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees line-through">$19,599 </span><span class="rupees">$18,900</span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="Mac.php">Mas Información</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>					 
                            </li>
                            <li>
                                <h4><a href="Lenovo.php">&nbsp;Laptop &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HP&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;X3603&nbsp;&nbsp;&nbsp;</a></h4>
                                <a href="Lenovo.php"><img src="images/banerLastProduct/HPSX3603.png" alt="" /></a>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees line-through">$23,599 </span><span class="rupees">$22,099 </span></p>
                                </div>
                                <div class="add-cart">								
                                    <h4><a href="Lenovo.php">Mas Información</a></h4>
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
                            <a href="Hp.php" title="img1"> <img src="images/banerLastProduct/HPSP133.jpg" alt="" /><p><font color="black">Laptop HP</font></p></a>
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
