<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>AREVE - Evénement</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<meta name="description" content="Service public d'accompagnement pour les propriétaires est-varois de maisons individuelles et les copropriétés dans leurs projets de travaux de rénovation, d'isolation ou de chauffage. Elle apporte conseils techniques et financiers gratuits et neutres."/>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<style>
			
	    p {
	      font-family: Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif;
	      font-size: 14px;
	      font-style: normal;
	      font-weight: 300;
	      letter-spacing: normal;
	      line-height: 20px;
	      text-transform: none;
	      color: black;
	      }

	    .header-1 {
	      font-family: 'Open Sans', sans-serif;
	      font-size: 48px;
	      font-style: normal;
	      font-weight: 100;
	      letter-spacing: normal;
	      line-height: 60px;
	      text-transform: none;
	      color: #000000;
	      }

	    .header-2 {
	      font-family: 'Open Sans', sans-serif;
	      font-size: 36px;
	      font-style: normal;
	      font-weight: 100;
	      letter-spacing: normal;
	      line-height: 40px;
	      text-transform: none;
	      color: #000000;
	      }

	    .pmax {
	      font-family: Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif;
	      font-size: 18px;
	      font-style: normal;
	      font-weight: 500;
	      letter-spacing: normal;
	      line-height: 30px;
	      text-transform: none;
	      }

			table.blueTable {
			  	width: 100%;
				text-align: center;
				border-collapse: collapse;
				margin-bottom: 20px;
				margin-top: 15px;
				}

			table.blueTable td, table.blueTable th {
			  	padding: 10px 10px;
				}
	</style>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78353130-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push( arguments )
		};
		gtag( 'js', new Date() );

		gtag( 'config', 'UA-78353130-1' );
	</script>
	<script>
		function relocate_home()
		{
		     location.href = "http://goo.gl/maps/8Sze9cbUG1m";
		} 
	</script>
	<script>
		function inscription()
		{
		     location.href = "https://docs.google.com/forms/d/e/1FAIpQLScZC94Pa-t2Y1Z9cTM5GWxiO2a3_DRp12rmU0o5MXrmr_xa6w/viewform";
		} 
	</script>
</head>

<body>
	<?php include ("../nav.php"); ?>

	<ul class="breadcrumb" style="margin-top:80px;">
		<li><a href="../index.php">Accueil</a>
		</li>
		<li class="active">Evénement</li>
	</ul>

	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<img src="../img/journees_reno.png" width="100%" alt="journées rénovation"/>
			</div>

			<div class="col-md-8">
				<h1 class="header-1">Les Journées de la Rénovation</h1>
				<h2 class="header-2" style="margin-bottom: 20px;">Le Rendez-vous de la rénovation de l'Habitat</h2>
				<p>L'AREVE vous accueille les 8 et 9 décembre 2017 aux 3èmes journées de la Rénovation, à l'UFCV, Bld Jean Dorat à Saint-Raphaël.<br>
					Venez rencontrer les conseillers de l'AREVE, qui répondront à toutes vos questions, quel que soit votre projet.
					<br>Vous pourrez également rencontrer nos partenaires, professionnels de la rénovation, qui vous présenteront leur savoir-faire et leur matériel.</p>
					<hr>
					<p class="pmax">Ouverture au public</p>
					<p>Vendredi 8 décembre, de 11h30 à 18h<br>Samedi 9 décembre, de 10h à 18h</p>

					<p class="pmax">Programme</p>
					<p>Vendredi 8 décembre à 10h00 : démonstration thermographie par drone <i>(réservée aux professionnels)</i><br>
						Vendredi 8 décembre à 11h30 : inauguration<br>Samedi 9 décembre à 15h00 : <b>conférence "Rénover avec les différentes aides" - Entrée libre</b></p>
						<hr>
						<p class="pmax" style="color: #60A153">Tombola gratuite avec de nombreux lots !</p>
					<div class="row" style="text-align: center;margin: 15px;">
						<input type="button" class="btn btn-info" value="Plan d'accès" onclick=" relocate_home()">
						<input type="button" class="btn btn-danger" value="Inscription" onclick=" inscription()">
					</div>
					
					<p class="pmax">Partenaires présents</p>
					<table class="blueTable">
						<tr>
							<td><img src="../img/logos/GRDF.png" width="70px" alt="logo grdf"></td>
							<td><img src="../img/sponsors/edf.png" width="70px" alt="logo edf"></td>
							<td><img src="../img/logos/citemetrie.png" width="70px" alt="logo citémétrie"></td>
							<td><img src="../img/logos/capeb3.jpg" width="70px" alt="logo capeb"></td>
						</tr>
						<tr>
							<td><img src="../img/ffb83.jpg" width="70px" alt="logo ffb"></td>
							<td><img src="../img/logos/AREP.jpg" width="80px" alt="logo arep"></td>
							<td><img src="../img/HCD/logo_hcd.png" width="80px" alt="logo hcd"></td>
							<td><img src="../img/logos/rg_mat.png" width="80px" alt="logo rg matériaux"></td>
						</tr>
						<tr>
							<td><img src="../img/logos/pastor.png" width="80px" alt="logo pastor var"></td>
							<td><img src="../img/logos/isol_sudest.png" width="90px" alt="logo isol sud est"></td>
							<td><img src="../img/logos/boutique_menuisier.jpg" height="80px" alt="logo boutique du menuisier"></td>
							<td><img src="../img/logos/logo_adobat.png" width="80px" alt="logo adobat"></td>
						</tr>
						<tr>
							<td><img src="../img/logos/frc.png" width="90px" alt="logo frc"></td>
							<td><img src="../img/logos/azursol.png" width="80px" alt="logo azur solaire systeme"></td>
							<td><img src="../img/logos/knauff.png" width="100px" alt="logo knauff"></td>
							<td><img src="../img/logos/quickciel.jpg" width="80px" alt="logo quickciel"></td>
						</tr>
						<tr>
							<td><img src="../img/logos/ecoplus.jpg" width="90px" alt="logo ecoplus"></td>
							<td><img src="../img/logos/CBP.png" width="90px" alt="logo compagnons batisseurs"></td>
							<td><img src="../img/logos/astier.jpg" width="90px" alt="logo Astier"></td>
					</table>


				</div>
			</div>
		</div>
	</body>

</html>