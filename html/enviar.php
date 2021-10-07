<?php 
$name = $_POST['name'];
$lastname = $_POST['last'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$paraEcoTrash = "giovanni.vic99@gmail.com";
$titulo = "Información Cliente";
$mensaje = "<html>".
	"<head><title>Email con información de " . $name ."</title>".
	"<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			font-weight: 300;
			color: #888;
			background-color:rgba(230, 225, 225, 0.5);
			line-height: 30px;
			text-align: center;
		}
		.contenedor{
			width: 80%;
			min-height:auto;
			text-align: center;
			margin: 0 auto;
			padding: 40px;
			background: #ececec;
			border-top: 3px solid #E64A19;
		}
		.bold{
			color:#333;
			font-size:25px;
			font-weight:bold;
		}
		img{
			margin-left: auto;
			margin-right: auto;
			display: block;
			padding:0px 0px 20px 0px;
		}
		</style>
	</head>".
	"<body>" .
	"<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span>Nombre del clinete: <strong class='bold'>" . $name . " " . $lastname . "</strong></span>" .
                "<p>&nbsp;</p>" .
				"<span>Correo: <strong class='bold'>" . $mail . "</strong></span>" .
                "<p>&nbsp;</p>" .
				"<span>Telefono: <strong class='bold'>" . $mail . "</strong></span>" .
                "<p>&nbsp;</p>" .
                "<p><strong>Mensaje: </strong> " . $phone . " </p>" .
                "<p>&nbsp;</p>" .
        "<p>&nbsp;</p>" .
        "<p><span class='bold'> EcoTrash Service </span></p>" .
        "<p>&nbsp;</p>" .
    "</div>" .
    "</body>" .
"</html>";

$cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasCliente .= 'From: La Paz B.C.S, Mexico<eco.trashservice@gmail.com>';
$enviadoCliente   = mail($paraEcoTrash, $titulo, $mensaje, $cabecerasCliente);
?>