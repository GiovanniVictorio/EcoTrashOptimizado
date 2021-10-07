<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EcoTrash Service</title>

	<!-- Css Links -->
	<link href='css/style-menu.css' rel='stylesheet'>
	<link href='css/style-index.css' rel='stylesheet'>
	<link href='css/style-header.css' rel='stylesheet'>
	<link href='css/style-modal-qr.css' rel='stylesheet'>
	<link href='css/style-footer.css' rel='stylesheet'>
	<!-- Boxiocns CDN Link -->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!-- Script CDN Link -->
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="container">
		<!-- Barra de navegacion -->
		<?php include "html/menu.html"; ?>

		<!-- Contenido -->
		<div class="home-section">
			<!-- Header -->
			<?php include "html/header.html"; ?>

			<!-- Contenido x2 -->
			<div class="content">

				<div class="info">
					Eco Trash Service brinda atención y capacitación personalizada en el manejo correcto de todos los Residuos Sólidos Urbanos (RSU) que tu generas, de esa manera garantizamos que esos desechos sean procesados por nuestros especialistas, quienes disgregan todo el material, dejando así libre impacto ambiental en tu comunidad. <br> <br>
					Hoy más que nunca es importante cuidar nuestro entorno, por ello es que hemos instaurado un proyecto con visión a futuro; destinamos un porcentaje de nuestros contratos para campañas de concientización en materia de separación de basura, en el mantenimiento y conservación de los vertederos de basura a cielo abierto donde tenemos sucursales. <br> <br>
					De los desechos orgánicos aprovechamos la mayor cantidad para elaborar composta y poder regresar a bajo costo este beneficio para nuestros árboles en parques y jardines. <br> <br>
					Utilizamos bolsas 100% biodegradables en los contenedores de RSU de nuestros clientes, los cuales desinfectamos y sanitizamos, evitando malos olores y por motivos de la pandemia Covid-19, anular una cadena de contagios.
				</div>

				<div class="img-map">
					<div class="images">
						<img src="images/rancho.jpeg" class="center">
					</div>
				</div>
			</div>

			<!-- Footer -->
			<?php include "html/footer.html"; ?>
		</div>

		<!-- Modal -->
		<?php include "html/modal-qr.html"; ?>
	</div>

	<script type="text/javascript">
		var secciones = document.querySelectorAll('.nav-links li');
		secciones.forEach(function(element, index){
			element.classList.remove('select');
		});
		var seccion = document.getElementById("seccion_1");
		seccion.classList.add('select');

		var idioma = document.getElementById("idioma");
		idioma.href = "html/ingles/index-ingles.php";

		var quienes = document.getElementById("quienes");
		quienes.href = "";
		var residuos = document.getElementById("residuos");
		residuos.href = "html/espanol/residuos.php";
		var como = document.getElementById("como");
		como.href = "html/espanol/como.php";
		var noticias = document.getElementById("noticias");
		noticias.href = "html/espanol/noticias.php";
		var colaboradores = document.getElementById("colaboradores");
		colaboradores.href = "html/espanol/colaboradores.php";

		var logo = document.getElementById("logo");
		logo.src = "images/Logo.png";
	</script>
</body>
</html>