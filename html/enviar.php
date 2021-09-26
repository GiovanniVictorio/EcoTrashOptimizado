<?php 
if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['message'])) {
		
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		$header = "From: " . $mail . "\r\n";
		$header .= "Reply-To: Luis" . "\r\n";
		$header .= "X-Mailer: PHP/" . phpversion();

		$para = 'giovanni.vic99@gmail.com';
		$asunto = "Informacion de servicios EcoTrash Service";

		$contenido = "Este mensaje fue enviado por: " . $name . "\r\n";
		$contenido .= "Su e-mail es: " . $mail . "\r\n";
		$contenido .= "Teléfono de contacto: " . $phone . "\r\n";
		$contenido .= "Mensaje: " . $_POST['message'] . "\r\n";
		$contenido .= "Enviado el: " . date('d/m/Y', time());

		$mail = @mail($para,$asunto,$contenido,$header);
	}
}
?>