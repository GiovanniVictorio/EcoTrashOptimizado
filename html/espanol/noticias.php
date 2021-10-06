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
	<link href='../../css/style-btnTop.css' rel='stylesheet'>
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
					<h2>Titulo de Prueba</h2>
				</div>
				<!-- Video -->
				<div class="video">
					<iframe width="650" height="405" src="https://www.youtube.com/embed/YiHTNfKJwAw?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<div class="info">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>

			<!-- Footer -->
			<?php include "../footer.html"; ?>
			<?php include "../enviar.php" ?>
		</div>

		<!-- Modal -->
		<?php include "../modal-qr.html"; ?>
		<!-- Boton top -->
		<?php include "../btn-top.html"; ?>
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