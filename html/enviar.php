<?php 
$name = $_POST['name'];
$lastname = $_POST['last'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "giovanni.vic99@gmail.com";
$asunto = "Verificacion de mail";
$mnsj = "Nombre: ". $name ." ". $lastname ."\n"."Correo: ". $mail ."\n"."Telefono: ". $phone ."\n"."Mensaje: ". $message;

if ( !empty($name) && !empty($lastname) && !empty($mail) && !empty($phone) && !empty($message) ) :
	$enviado = mail( $to, $asunto, $mnsj );

	if ($enviado):
		echo "Enviado";
	else:
		echo "Error al enviar el correo";
	endif;

	// header('Location: ../index.php');
endif;
?>