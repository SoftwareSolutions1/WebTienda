<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ("../libs/phpmailer/class.phpmailer.php");

/**
 * Description of EmailUtils
 *
 * @author drakofire
 */
class EmailUtils {

    //put your code here


    public function enviarCorreo($para, $asunto) {
        //$para = 'correo@boxin.mx';
        //$titulo = 'El título';

        /*
          $cabeceras = 'From: contacto@boxin.mx' . "\r\n" .
          'Reply-To: contacto@boxin.mx' . "\r\n" .
          'X-Mailer: PHP/' . phpversion(); */
        // título
        //$titulo = 'Recordatorio de cumpleaños para Agosto';
// mensaje
        $mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>¡Estos son los cumpleaños para Agosto!</p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// Cabeceras adicionales
        $cabeceras .= 'To: ' . $para . "\r\n";
        $cabeceras .= 'From: Boxin Web <contacto@boxin.mx>' . "\r\n";
        //   $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
        //   $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
// Enviarlo
        mail($para, $asunto, $mensaje, $cabeceras);
    }

    public function enviarCorreoBienvenida($para, $asunto, $suscriptor, $usuario) {

        $mensaje = "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bienvenida Boxin</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
        <div style='background-color:#f5f3f3;width:100%;padding:70px 0 70px 0;'>
            <table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'><tbody><tr><td align='center' valign='top'>
                            <p style=''><img src='cid:gracias_boxin' alt='Boxin' style='display:inline;border:none;font-size:14px;font-weight:bold;height:auto;line-height:100%;text-decoration:none;text-transform:capitalize;'></p>                    	<table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_container' style='box-shadow:0 0 0 3px rgba(0,0,0,0.025)  !important;border-radius:6px !important;background-color:#ffffff;border:1px solid #dcdbdb;border-radius:6px !important;'><tbody><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_header' style='background-color:#ba2b31;color:#ffffff;border-top-left-radius:6px !important;border-top-right-radius:6px !important;border-bottom:0;font-family:Arial;font-weight:bold;line-height:100%;vertical-align:middle;' bgcolor='#ba2b31'><tbody><tr><td>
                                                            <h1 style='color:#ffffff;padding:28px 24px;text-shadow:0 1px 0 #c8555a;display:block;font-family:Arial;font-size:30px;font-weight:bold;text-align:left;line-height:150%;'>Bienvenida a Boxin</h1>

                                                        </td>
                                                    </tr></tbody></table></td>
                                    </tr><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_body'><tbody><tr><td valign='top' style='background-color:#ffffff;border-radius:6px !important;'>

                                                            <table border='0' cellpadding='20' cellspacing='0' width='100%'><tbody><tr><td valign='top'>
                                                                            <div style='color:#3d3b3b;font-family:Arial;font-size:14px;line-height:150%;text-align:left;'>
                                                                                <p>Hola $suscriptor->nombre $suscriptor->apellido_paterno !</p>
                                                                                <p>Gracias por crear una cuenta en Boxin. Tu usuario es
                                                                                    <strong>$usuario->usuario   </strong>.</p>


                                                                                <p>Puedes acceder a tu cuenta para ver tus pedidos y cambiar tu
                                                                                    contraseña aquí: http://www.boxin.mx/app_web/.</p>

                                                                            </div>
                                                                        </td>
                                                                    </tr></tbody></table></td>
                                                    </tr></tbody></table></td>
                                    </tr><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='10' cellspacing='0' width='600' id='ecxtemplate_footer' style='border-top:0;'><tbody><tr><td valign='top'>
                                                            <table border='0' cellpadding='10' cellspacing='0' width='100%'><tbody><tr><td colspan='2' valign='middle' id='ecxcredit' style='border:0;color:#d68083;font-family:Arial;font-size:12px;line-height:125%;text-align:center;'>
                                                                            <p><a href='http://boxin.mx/tips_boxin.pdf' target='_blank' style='color:#0d0a0a;font-weight:normal;text-decoration:underline;'><font color='red'>“¡Recibe un regalito
                                                                                    de parte de Boxin dando clíck aquí!”</font></a></p>
                                                                        </td>
                                                                    </tr></tbody></table></td>
                                                    </tr></tbody></table></td>
                                    </tr></tbody></table></td>
                    </tr></tbody></table></div>
    </body>
</html>";

        $receiver = $para;
        $subject = $asunto;
        $sender = "contacto@boxin.mx";
        $sender_name = "Boxin Web";

        $mail = new PHPMailer(true);

        $mail->From = $sender;
        $mail->FromName = $sender_name;
        $mail->AddAddress($receiver);
        $mail->Subject = $subject;
        //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->WordWrap = 80; // set word wrap
        $mail->MsgHTML($mensaje);
        $mail->IsHTML(true); // send as HTML
        $mail->AddEmbeddedImage('email_images/gracias_boxin.jpeg', 'gracias_boxin', 'gracias_boxin.jpeg');
        $mail->Send();
    }

    public function enviarCorreoCompraCaja($para, $asunto, $suscriptor, $suscriptorCompras) {

        $mensaje = "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bienvenida Boxin</title>
        <meta charset='UTF-8'>
        <style>
            .CSSTableGenerator {
                margin:0px;padding:0px;
                width:100%;
                box-shadow: 10px 10px 5px #888888;
                border:1px solid #d3d1d1;

                -moz-border-radius-bottomleft:14px;
                -webkit-border-bottom-left-radius:14px;
                border-bottom-left-radius:14px;

                -moz-border-radius-bottomright:14px;
                -webkit-border-bottom-right-radius:14px;
                border-bottom-right-radius:14px;

                -moz-border-radius-topright:14px;
                -webkit-border-top-right-radius:14px;
                border-top-right-radius:14px;

                -moz-border-radius-topleft:14px;
                -webkit-border-top-left-radius:14px;
                border-top-left-radius:14px;
            }.CSSTableGenerator table{
                border-collapse: collapse;
                border-spacing: 0;
                width:100%;
                height:100%;
                margin:0px;padding:0px;
            }.CSSTableGenerator tr:last-child td:last-child {
                -moz-border-radius-bottomright:14px;
                -webkit-border-bottom-right-radius:14px;
                border-bottom-right-radius:14px;
            }
            .CSSTableGenerator table tr:first-child td:first-child {
                -moz-border-radius-topleft:14px;
                -webkit-border-top-left-radius:14px;
                border-top-left-radius:14px;
            }
            .CSSTableGenerator table tr:first-child td:last-child {
                -moz-border-radius-topright:14px;
                -webkit-border-top-right-radius:14px;
                border-top-right-radius:14px;
            }.CSSTableGenerator tr:last-child td:first-child{
                -moz-border-radius-bottomleft:14px;
                -webkit-border-bottom-left-radius:14px;
                border-bottom-left-radius:14px;
            }.CSSTableGenerator tr:hover td{
                background-color:#ffaaaa;


            }
            .CSSTableGenerator td{
                vertical-align:middle;

                background-color:#ffffff;

                border:1px solid #d3d1d1;
                border-width:0px 1px 1px 0px;
                text-align:left;
                padding:7px;
                font-size:10px;
                font-family:Arial;
                font-weight:normal;
                color:#444444;
            }.CSSTableGenerator tr:last-child td{
                border-width:0px 1px 0px 0px;
            }.CSSTableGenerator tr td:last-child{
                border-width:0px 0px 1px 0px;
            }.CSSTableGenerator tr:last-child td:last-child{
                border-width:0px 0px 0px 0px;
            }
            .CSSTableGenerator tr:first-child td{
                background:-o-linear-gradient(bottom, #ff5656 5%, #9b0101 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff5656), color-stop(1, #9b0101) );
                background:-moz-linear-gradient( center top, #ff5656 5%, #9b0101 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5656', endColorstr='#9b0101');	background: -o-linear-gradient(top,#ff5656,9b0101);

                background-color:#ff5656;
                border:0px solid #d3d1d1;
                text-align:center;
                border-width:0px 0px 1px 1px;
                font-size:14px;
                font-family:Arial;
                font-weight:bold;
                color:#ffffff;
            }
            .CSSTableGenerator tr:first-child:hover td{
                background:-o-linear-gradient(bottom, #ff5656 5%, #9b0101 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff5656), color-stop(1, #9b0101) );
                background:-moz-linear-gradient( center top, #ff5656 5%, #9b0101 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5656', endColorstr='#9b0101');	background: -o-linear-gradient(top,#ff5656,9b0101);

                background-color:#ff5656;
            }
            .CSSTableGenerator tr:first-child td:first-child{
                border-width:0px 0px 1px 0px;
            }
            .CSSTableGenerator tr:first-child td:last-child{
                border-width:0px 0px 1px 1px;
            }
        </style>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
        <div style='background-color:#f5f3f3;width:100%;padding:70px 0 70px 0;'>
            <table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'><tbody><tr><td align='center' valign='top'>
                            <p style=''><img src='email_images/gracias_boxin.jpeg' alt='Boxin' style='display:inline;border:none;font-size:14px;font-weight:bold;height:auto;line-height:100%;text-decoration:none;text-transform:capitalize;'></p>                    	<table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_container' style='box-shadow:0 0 0 3px rgba(0,0,0,0.025)  !important;border-radius:6px !important;background-color:#ffffff;border:1px solid #dcdbdb;border-radius:6px !important;'><tbody><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_header' style='background-color:#ba2b31;color:#ffffff;border-top-left-radius:6px !important;border-top-right-radius:6px !important;border-bottom:0;font-family:Arial;font-weight:bold;line-height:100%;vertical-align:middle;' bgcolor='#ba2b31'><tbody><tr><td>
                                                            <h1 style='color:#ffffff;padding:28px 24px;text-shadow:0 1px 0 #c8555a;display:block;font-family:Arial;font-size:30px;font-weight:bold;text-align:left;line-height:150%;'>Bienvenida a Boxin</h1>

                                                        </td>
                                                    </tr></tbody></table></td>
                                    </tr><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_body'><tbody><tr><td valign='top' style='background-color:#ffffff;border-radius:6px !important;'>

                                                            <table border='0' cellpadding='20' cellspacing='0' width='100%'><tbody><tr><td valign='top'>
                                                                            <div style='color:#3d3b3b;font-family:Arial;font-size:14px;line-height:150%;text-align:left;'>
                                                                                <p>Hola $suscriptor->nombre $suscriptor->apellido_paterno'!</p><br/>
                                                                                <p>Código de Referencia: 
                                                                                    <font style='color: #cd0a0a; font-family: sans-serif;'> 
                                                                                    $suscriptorCompras->codigo_referencia
                                                                                    </font>
                                                                                    <br/>
                                                                                </p>
                                                                                <p>Recuerda que tienes dos días hábiles después de generado tú Código de Referencia: 
                                                                                    <font style='color: #cd0a0a; font-family: sans-serif;'> 
                                                                                    $suscriptorCompras->codigo_referencia
                                                                                    </font>  para realizar tu pago. 
                                                                                    Una vez que hayas realizado el pago, tu caja llegará los primeros días del siguiente mes.
                                                                                    FedEx empresa líder en envío entregará la caja a la puerta de tu casa.
                                                                                    Usa tú Código de Referencia en el deposito de pago como se muestra a continuación:
                                                                                </p>
                                                                                <br/>
                                                                                <div class='CSSTableGenerator'>
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>
                                                                                                Nombre de la Cuenta
                                                                                            </td>
                                                                                            <td >
                                                                                                Número de cuenta
                                                                                            </td>
                                                                                            <td>
                                                                                                Número de empresa
                                                                                            </td>
                                                                                            <td>Costo</td>
                                                                                            <td>Código de Referencia</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align='center' >
                                                                                                Boxinmx - Banorte
                                                                                            </td>
                                                                                            <td align='center' >Especificar que es cuenta concentradora
                                                                                            </td>
                                                                                            <td align='center' >
                                                                                                2329
                                                                                            </td>
                                                                                            <td align='center'>$215.00</td>
                                                                                            <td align='center'><font style='color: #cd0a0a; font-family: sans-serif;'>$suscriptorCompras->codigo_referencia</font></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <p>Recuerda que puedes pagarlo en los siguientes establecimientos:</p>
                                                                                <ul>
                                                                                    <li>
                                                                                        BANORTE
                                                                                    </li>
                                                                                    <li>
                                                                                        SEVEN ELEVEN 
                                                                                    </li>
                                                                                    <li>
                                                                                        OXXO
                                                                                    </li>
                                                                                    <li>
                                                                                        EXTRA
                                                                                    </li>
                                                                                    <li>
                                                                                        TELECOM TELEGRAFOS
                                                                                    </li>
                                                                                </ul>

                                                                                <p>Puedes acceder a tu cuenta para ver tus pedidos y cambiar tu
                                                                                    contraseña aquí: http://www.boxin.mx/app_web/</p>

                                                                            </div>
                                                                        </td>
                                                                    </tr></tbody></table></td>
                                                    </tr></tbody></table></td>
                                    </tr><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='10' cellspacing='0' width='600' id='ecxtemplate_footer' style='border-top:0;'><tbody><tr><td valign='top'>
                                                            <table border='0' cellpadding='10' cellspacing='0' width='100%'><tbody><tr><td colspan='2' valign='middle' id='ecxcredit' style='border:0;color:#d68083;font-family:Arial;font-size:12px;line-height:125%;text-align:center;'>
                                                                            <p><a href='http://boxin.mx/tips_boxin.pdf' target='_blank' style='color:#0d0a0a;font-weight:normal;text-decoration:underline;'><font color='red'>“¡Recibe un regalito
                                                                                    de parte de Boxin dando clíck aquí!”</font></a></p>
                                                                        </td>
                                                                    </tr></tbody></table></td>
                                                    </tr></tbody></table></td>
                                    </tr></tbody></table></td>
                    </tr></tbody></table></div>
    </body>
</html>";

        $receiver = $para;
        $subject = $asunto;
        $sender = "contacto@boxin.mx";
        $sender_name = "Boxin Web";

        $mail = new PHPMailer(true);

        $mail->From = $sender;
        $mail->FromName = $sender_name;
        $mail->AddAddress($receiver);
        $mail->Subject = $subject;
        //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->WordWrap = 80; // set word wrap
        $mail->MsgHTML($mensaje);
        $mail->IsHTML(true); // send as HTML
        $mail->AddEmbeddedImage('email_images/gracias_boxin.jpeg', 'gracias_boxin', 'gracias_boxin.jpeg');
        $mail->Send();
    }

    public function enviarCorreoNewPass($para, $asunto, $suscriptor, $newpass) {

        $mensaje = "<html>
    <head>
        <title>Bienvenida Boxin</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
        <div style='background-color:#f5f3f3;width:100%;padding:70px 0 70px 0;'>
            <table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'><tbody><tr><td align='center' valign='top'>
                            <p style=''><img src='email_images/gracias_boxin.jpeg' alt='Boxin' style='display:inline;border:none;font-size:14px;font-weight:bold;height:auto;line-height:100%;text-decoration:none;text-transform:capitalize;'></p>                    	<table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_container' style='box-shadow:0 0 0 3px rgba(0,0,0,0.025)  !important;border-radius:6px !important;background-color:#ffffff;border:1px solid #dcdbdb;border-radius:6px !important;'><tbody><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_header' style='background-color:#ba2b31;color:#ffffff;border-top-left-radius:6px !important;border-top-right-radius:6px !important;border-bottom:0;font-family:Arial;font-weight:bold;line-height:100%;vertical-align:middle;' bgcolor='#ba2b31'><tbody><tr><td>
                                                            <h1 style='color:#ffffff;padding:28px 24px;text-shadow:0 1px 0 #c8555a;display:block;font-family:Arial;font-size:30px;font-weight:bold;text-align:left;line-height:150%;'>Bienvenida a Boxin</h1>

                                                        </td>
                                                    </tr></tbody></table></td>
                                    </tr><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='0' cellspacing='0' width='600' id='ecxtemplate_body'><tbody><tr><td valign='top' style='background-color:#ffffff;border-radius:6px !important;'>

                                                            <table border='0' cellpadding='20' cellspacing='0' width='100%'><tbody><tr><td valign='top'>
                                                                            <div style='color:#3d3b3b;font-family:Arial;font-size:14px;line-height:150%;text-align:left;'>
                                                                                <p>Hola $suscriptor->nombre $suscriptor->apellido_paterno!</p>
                                                                                <p>Tu contraseña se a reiniciado y ahora es: <strong>$newpass</strong></p>

                                                                                <p>Recuerda que la puedes modificar en la sección de Cambiar Contraseña después de hayas iniciado sesión.</p>

                                                                                <p>Puedes acceder a tu cuenta para cambiar tu contraseña aquí: http://www.boxin.mx/app_web/.</p>

                                                                            </div>
                                                                        </td>
                                                                    </tr></tbody></table></td>
                                                    </tr></tbody></table></td>
                                    </tr><tr><td align='center' valign='top'>

                                            <table border='0' cellpadding='10' cellspacing='0' width='600' id='ecxtemplate_footer' style='border-top:0;'><tbody><tr><td valign='top'>
                                                            <table border='0' cellpadding='10' cellspacing='0' width='100%'><tbody><tr><td colspan='2' valign='middle' id='ecxcredit' style='border:0;color:#d68083;font-family:Arial;font-size:12px;line-height:125%;text-align:center;'>
                                                                            <p><a href='http://boxin.mx/tips_boxin.pdf' target='_blank' style='color:#0d0a0a;font-weight:normal;text-decoration:underline;'><font color='red'>“¡Recibe un regalito
                                                                                    de parte de Boxin dando clíck aquí!”</font></a></p>
                                                                        </td>
                                                                    </tr></tbody></table></td>
                                                    </tr></tbody></table></td>
                                    </tr></tbody></table></td>
                    </tr></tbody></table></div>
    </body>
</html>";

        $receiver = $para;
        $subject = $asunto;
        $sender = "contacto@boxin.mx";
        $sender_name = "Boxin Web";

        $mail = new PHPMailer(true);

        $mail->From = $sender;
        $mail->FromName = $sender_name;
        $mail->AddAddress($receiver);
        $mail->Subject = $subject;
        //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->WordWrap = 80; // set word wrap
        $mail->MsgHTML($mensaje);
        $mail->IsHTML(true); // send as HTML
        $mail->AddEmbeddedImage('email_images/gracias_boxin.jpeg', 'gracias_boxin', 'gracias_boxin.jpeg');
        $mail->Send();
    }

}
