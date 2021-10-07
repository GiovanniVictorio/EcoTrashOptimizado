<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EcoTrash Service</title>

	<!-- Css Links -->
	<link href='../../css/style-menu.css' rel='stylesheet'>
	<link href='../../css/style-index.css' rel='stylesheet'>
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
		<?php include "html-ingles/menu-ingles.html"; ?>

		<!-- Contenido -->
		<div class="home-section">
			<!-- Header -->
			<?php include "html-ingles/header-ingles.html"; ?>

			<!-- Contenido x2 -->
			<div class="content">
				<div class="info">
					Eco Trash Service provides personalized attention and training in the correct handling of all Urban Solid Waste (MSW) that you generate, in this way we guarantee that these waste are processed by our specialists, who disintegrate all the material,thus leaving free environmental impact on your community. <br> <br>
					Today more than ever it is important to take care of our environment, that is why we have established a project with a vision for the future; We allocate a percentage of our contracts to awareness campaigns in the matter of garbage separation, in the maintenance and conservation of the open-air garbage dumps where we have branches. <br> <br>
					From organic waste we take advantage of the greatest amount to make compost and to be able to return this benefit at a low cost to our trees in parks and gardens. <br> <br>
					We use 100% biodegradable bags in our clients' MSW containers, which we disinfect and sanitize, avoiding bad odors and, due to the Covid-19 pandemic, canceling a chain of infections.
				</div>

				<div class="img-map">
					<div class="images">
						<img src="../../images/rancho.jpeg" class="center">
					</div>
				</div>
			</div>

			<!-- Footer -->
			<?php include "html-ingles/footer-ingles.html"; ?>
		</div>

		<!-- Modal -->
		<?php include "html-ingles/modal-qr-ingles.html"; ?>
	</div>

	<script type="text/javascript">
		var secciones = document.querySelectorAll('.nav-links li');
		secciones.forEach(function(element, index){
			element.classList.remove('select');
		});
		var seccion = document.getElementById("seccion_1");
		seccion.classList.add('select');

		var idioma = document.getElementById("idioma");
		idioma.href = "../../index.php";

		var quienes = document.getElementById("quienes");
		quienes.href = "";
		var residuos = document.getElementById("residuos");
		residuos.href = "html-ingles/residuos-ingles.php";
		var como = document.getElementById("como");
		como.href = "html-ingles/como-ingles.php";
		var noticias = document.getElementById("noticias");
		noticias.href = "html-ingles/noticias-ingles.php";
		var colaboradores = document.getElementById("colaboradores");
		colaboradores.href = "html-ingles/colaboradores-ingles.php";

		var logo = document.getElementById("logo");
		logo.src = "../../images/Logo.png";
	</script>
</body>
</html>