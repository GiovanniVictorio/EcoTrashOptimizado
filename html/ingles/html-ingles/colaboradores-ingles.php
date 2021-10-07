<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EcoTrash Service</title>

	<!-- Css Links -->
	<link href='../../../css/style-colaboradores.css' rel='stylesheet'>
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
					<h2>Meet the companies that work hand in hand with EcoTrash Service</h2>
				</div>
				<!-- Div con 2 cartas -->
				<div class="cards">
					<!-- Carta 1 -->
					<div class="card">
						<!-- Img de la carta -->
						<div class="circle">
							<div class="imgBx">
								<img src="../../../images/colaboradores/">
							</div>
						</div>
						<!-- Informacion de la carta -->
						<div class="contentCard">
							<!-- Link web -->
							<a href="">
								<i class='bx bxs-map'></i>
							</a>
							<!-- Nombre -->
							<h3></h3>
							<!-- Informacion -->
							<div class="textIcon">
								<h4>Phone: </h4>
								<a href="">
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div>

					<!-- Carta 2 -->
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
		var seccion = document.getElementById("seccion_5");
		seccion.classList.add('select');

		var idioma = document.getElementById("idioma");
		idioma.href = "../../espanol/colaboradores.php";

		var quienes = document.getElementById("quienes");
		quienes.href = "../index-ingles.php";
		var residuos = document.getElementById("residuos");
		residuos.href = "residuos-ingles.php";
		var como = document.getElementById("como");
		como.href = "como-ingles.php";
		var noticias = document.getElementById("noticias");
		noticias.href = "noticias-ingles.php";
		var colaboradores = document.getElementById("colaboradores");
		colaboradores.href = "";

		var logo = document.getElementById("logo");
		logo.src = "../../../images/Logo.png";
	</script>
</body>
</html>