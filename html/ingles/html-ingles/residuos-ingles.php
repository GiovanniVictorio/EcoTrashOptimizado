<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EcoTrash Service</title>

	<!-- Css Links -->
	<link href='../../../css/style-residuos.css' rel='stylesheet'>
	<link href='../../../css/style-menu.css' rel='stylesheet'>
	<link href='../../../css/style-header.css' rel='stylesheet'>
	<link href='../../../css/style-modal-qr.css' rel='stylesheet'>
	<link href='../../../css/style-footer.css' rel='stylesheet'>
	<link href='../../../css/style-btnTop.css' rel='stylesheet'>
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
				<!-- Basura Organica -->
				<div class="titulo">
					<A name= "organicos"></A><h2>WHAT ARE ORGANIC WASTE?</h2>
				</div>

				<div class="info">
					Organic waste or domestic bio-waste are biodegradable waste of plant or animal origin, susceptible to biologically degrading generated in the home and commercial environment.<br><br>
					The organic fraction is mainly composed of food and garden scraps that are produced daily at home and in commercial establishments, such as fruit and vegetable peelings, food scraps, fish waste, bones and meat scraps, napkins or tablecloths. of paper with remains of organic matter, coffee remains, animal bones, small pruning remains, natural cork stoppers, toothpicks, shells or tea bags, among others.<br><br>
					<i>35% of our garbage bag is made up of organic matter, mainly food scraps.</i> <br><br>
				</div>

				<div class="img-info">
					<img src="../../../images/organica_1.jpg" class="center">
				</div>

				<div class="info">
					Although the priority is prevention, once generated, the proper management of domestic organic waste, through separate collection and subsequent biological treatment, without mixing with other waste, is essential to comply with legal regulations, it is necessary To guarantee adequate treatment and thus contribute to saving energy and greenhouse gas emissions, it improves the levels of collection and quality of the rest of the fractions collected separately and, in addition, favors the creation of new jobs in the sector of the collection and treatment.
				</div>

				<!-- Basura Inorganica -->
				<div class="titulo">
					<A name= "inorganicosr"></A><h2>WHAT IS RECYCLABLE INORGANIC WASTE?</h2>
				</div>

				<div class="info">
					<i>Did you know that paper, cardboard, glass, plastics, metals, clothing and textiles can be transformed into new products if they are not contaminated with other waste?</i> <br><br>
					But to take advantage of them it is necessary to separate them, and thus guarantee that they can be reincorporated into the production process, and give them value again. <br><br>
					Materials such as glass and aluminum can be recycled unlimitedly without losing their quality and properties. <br><br>
					By separating our waste, we prevent it from becoming garbage, losing its value and polluting our environment.
				</div>

				<div class="img-info-2">
					<img src="../../../images/inorganicosReciclables_1.PNG" class="center">
					<img src="../../../images/inorganicosReciclables_2.PNG" class="center">
				</div>

				<!-- Basura Inorganica No Reciclable -->
				<div class="titulo">
					<A name= "inorganicosnr"></A><h2>WHAT IS NON-RECYCLABLE INORGANIC WASTE?</h2>
				</div>

				<div class="info">
					There are materials that are very difficult to recycle due to their composition, lack of adequate technology, low demand or lack of financial resources. Many of these non-recyclable waste belong to hazardous waste, which must be stored in controlled deposits since it is not possible to use it for other uses. <br><br>
					This causes a large volume of waste causing a high landscape and environmental impact, which on the one hand is destined to incineration plants where at least the energy from their combustion is used, or to landfill, as a last option. <br><br>
					<b><i>Non-recyclable materials could be:</i></b> <br><br>
					<b>Papers: </b> Fax paper and tracing paper, magazines and catalogs, cellophane (used as wrapping paper, bouquets, adhesive tapes, etc.), napkins and kitchen paper, used glasses, self-adhesive labels, etc. <br>
					<b>Glasses: </b> Light bulbs, fluorescent tubes, lamps, flat glass (windows for example), mirrors, glasses and sunglasses, cups, flowerpots and other ceramic objects. <br>
					<b>Textiles: </b> Fabrics impregnated with contaminants such as paint, fuel, etc. <br>
					<b>Metals and others: </b> Cans with toxic substances, for example paint and aerosols.
				</div>

				<div class="img-info">
					<img src="../../../images/noReciclable.jpg" class="center">
				</div>

				<!-- Basura meanejo especial -->
				<div class="titulo">
					<A name= "manejo"></A><h2>SPECIAL HANDLING WASTE </h2>
				</div>

				<div class="img-info">
					<img src="../../../images/manejoespecial.jpg" class="center">
				</div>

				<div class="info">
					Special Management Waste (RME) is defined in the General Law for the Prevention and Comprehensive Management of Waste (LGPGIR) as those generated in production processes, which do not meet the characteristics to be considered hazardous or solid urban waste , or that are produced by large urban solid waste generators. Likewise, this law establishes the defined categories of RME. Another consultation tool is the Official Mexican Standard NOM-161-SEMARNAT-2011, which establishes the criteria to classify RME and determine which are subject to a management plan; the list thereof, the procedure for inclusion or exclusion from said list; as well as the elements and procedures for the formulation of management plans.<br><br>
					<i>Among which are household appliances, electronics, motor vehicles at the end of their useful life, to mention the most common.</i>
				</div>

				<div class="img-info">
					<img src="../../../images/manejoespecial.PNG" class="center">
				</div>

				<div class="info">
					<i>According to the basic diagnosis for comprehensive waste management (SEMARNAT 2012), 84 million tons of 14 EMR streams are generated annually, in addition to 805 thousand vehicles that reach the end of their useful life annually and the figures are on the rise.</i>
				</div>
			</div>

			<!-- Footer -->
			<?php include "footer-ingles.html"; ?>
			<?php include "../../enviar.php"; ?>
		</div>

		<!-- Modal -->
		<?php include "modal-qr-ingles.html"; ?>
		<!-- Boton top -->
		<?php include "../../btn-top.html"; ?>
	</div>

	<script type="text/javascript">
		var secciones = document.querySelectorAll('.nav-links li');
		secciones.forEach(function(element, index){
			element.classList.remove('select');
		});
		var seccion = document.getElementById("seccion_2");
		seccion.classList.add('select');

		var idioma = document.getElementById("idioma");
		idioma.href = "../../espanol/residuos.php";

		var quienes = document.getElementById("quienes");
		quienes.href = "../index-ingles.php";
		var residuos = document.getElementById("residuos");
		residuos.href = "";
		var como = document.getElementById("como");
		como.href = "";
		var noticias = document.getElementById("noticias");
		noticias.href = "noticias-ingles.php";
		var colaboradores = document.getElementById("colaboradores");
		colaboradores.href = "colaboradores-ingles.php";

		var logo = document.getElementById("logo");
		logo.src = "../../../images/Logo.png";
	</script>
</body>
</html>