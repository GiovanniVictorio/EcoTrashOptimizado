<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EcoTrash Service</title>

	<!-- Css Links -->
	<link href='../../css/style-noticias.css' rel='stylesheet'>
	<link href='../../css/style-menu.css' rel='stylesheet'>
	<link href='../../css/style-header.css' rel='stylesheet'>
	<link href='../../css/style-modal-qr.css' rel='stylesheet'>
	<link href='../../css/style-footer.css' rel='stylesheet'>
	<!-- Boxiocns CDN Link -->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!-- Script CDN Link -->
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="container">
		<!-- Barra de navegacion -->
		<?php include "../menu.html"; ?>

		<!-- Contenido -->
		<div class="home-section">
			<!-- Header -->
			<?php include "../header.html"; ?>

			<!-- Contenido x2 -->
			<div class="content">
				<!-- Titulo -->
				<div class="titulo">
					<h2>Espera noticias de nostros proximamente...</h2>
				</div>
				<!-- Video -->
				<div class="video">
				</div>

				<div class="info">
				</div>
			</div>

			<!-- Footer -->
			<?php include "../footer.html"; ?>
		</div>

		<!-- Modal -->
		<?php include "../modal-qr.html"; ?>
	</div>

	<script type="text/javascript">
		var secciones = document.querySelectorAll('.nav-links li');
		secciones.forEach(function(element, index){
			element.classList.remove('select');
		});
		var seccion = document.getElementById("seccion_4");
		seccion.classList.add('select');

		var idioma = document.getElementById("idioma");
		idioma.href = "../ingles/html-ingles/noticias-ingles.php";

		var quienes = document.getElementById("quienes");
		quienes.href = "../../index.php";
		var residuos = document.getElementById("residuos");
		residuos.href = "residuos.php";
		var como = document.getElementById("como");
		como.href = "como.php";
		var noticias = document.getElementById("noticias");
		noticias.href = "";
		var colaboradores = document.getElementById("colaboradores");
		colaboradores.href = "colaboradores.php";

		var logo = document.getElementById("logo");
		logo.src = "../../images/Logo.png";
	</script>
</body>
</html>