<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EcoTrash Service</title>

	<!-- Css Links -->
	<link href='../../../css/style-noticias.css' rel='stylesheet'>
	<link href='../../../css/style-menu.css' rel='stylesheet'>
	<link href='../../../css/style-header.css' rel='stylesheet'>
	<link href='../../../css/style-modal-qr.css' rel='stylesheet'>
	<link href='../../../css/style-footer.css' rel='stylesheet'>
	<!-- Boxiocns CDN Link -->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!-- Script CDN Link -->
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="container">
		<!-- Barra de navegacion -->
		<?php include "menu-ingles.html"; ?>

		<!-- Contenido -->
		<div class="home-section">
			<!-- Header -->
			<?php include "header-ingles.html"; ?>

			<!-- Contenido x2 -->
			<div class="content">
				<!-- Titulo -->
				<div class="titulo">
					<h2>Wait for news from us soon ...</h2>
				</div>
				<!-- Video -->
				<div class="video">
				</div>

				<div class="info">
				</div>
			</div>

			<!-- Footer -->
			<?php include "footer-ingles.html"; ?>
		</div>

		<!-- Modal -->
		<?php include "modal-qr-ingles.html"; ?>
	</div>

	<script type="text/javascript">
		var secciones = document.querySelectorAll('.nav-links li');
		secciones.forEach(function(element, index){
			element.classList.remove('select');
		});
		var seccion = document.getElementById("seccion_4");
		seccion.classList.add('select');

		var idioma = document.getElementById("idioma");
		idioma.href = "../../espanol/noticias.php";

		var quienes = document.getElementById("quienes");
		quienes.href = "../index-ingles.php";
		var residuos = document.getElementById("residuos");
		residuos.href = "residuos-ingles.php";
		var como = document.getElementById("como");
		como.href = "como-ingles.php";
		var noticias = document.getElementById("noticias");
		noticias.href = "";
		var colaboradores = document.getElementById("colaboradores");
		colaboradores.href = "colaboradores-ingles.php";

		var logo = document.getElementById("logo");
		logo.src = "../../../images/Logo.png";
	</script>
</body>
</html>