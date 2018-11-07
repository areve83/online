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
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
	body,td,th {
	font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
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
		     location.href = "https://www.google.fr/maps/place/Ch%C3%A2teau+Sainte+Roseline/@43.4746564,6.5113701,17z/data=!3m1!4b1!4m5!3m4!1s0x12ceae6ac49be0bf:0x29d4b4bc041a9e4a!8m2!3d43.4746564!4d6.5135588?shorturl=1";
		} 
	</script>
	<script>
		function inscription()
		{
		     location.href = 
			"https://docs.google.com/forms/d/e/1FAIpQLSdpwk89NJPWQMVje4EyPtYqay__ErPDLewqjKG6zpz2pFEkLw/viewform";
		} 
	</script>
</head>

<body>
	<?php include ("nav.php"); ?>

	<ul class="breadcrumb" style="margin-top:80px;">
		<li><a href="index.php">Accueil</a>
		</li>
		<li class="active">Evénement</li>
	</ul>

	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<img src="img/journees_reno_ste_roseline.png" width="100%" alt="journées rénovation"/>
			</div>

			<div class="col-md-8">
				<h1 class="header-1">Les Journées de la Rénovation</h1>
				<h2 class="header-2" style="margin-bottom: 20px;">Le Rendez-vous de la rénovation énergétique de l'Habitat dans le Var</h2>
				<p>L'AREVE vous accueille <b>le 3 février 2018 </b>aux 4èmes journées de la Rénovation, qui se dérouleront au <b>Château Sainte-Roseline, aux Arcs-sur-Argens.</b><br>
					<b>Propriétaire en maison individuelle ou logement collectif, </b>venez rencontrer les conseillers de l'AREVE, qui vous conseilleront quel que soit votre projet de rénovation.
					<br>Vous pourrez également rencontrer nos partenaires, professionnels de la rénovation, qui vous présenteront leur savoir-faire et leur matériel.</p>
					<hr>
					<p class="pmax">Ouverture au public</p>
					<p>Samedi 3 février, de 9h00 à 18h00</p>

					<p class="pmax">Programme du samedi 3 février</p>
				<p>9h00 : <b>démonstration thermographie par drone.</b><br>Pour en savoir plus sur cette technologie et son intérêt dans le cadre de la rénovation de l'habitat :<a href="thermo.php" target="_blank"> suivez ce lien.</a>
					<p>9h30 : <b>Installation photovoltaïque et autoconsommation.</b>
						<br>EFISUN, partenaire de l'AREVE, vous présentera le projet réalisé sur un bâtiment de la commune des Arcs-sur-Argens.</p>
						11h30 : <b>Inauguration</b>
						<br>15h00 : <b>conférence "Rénover avec les différentes aides"</b></p>
				<br><p class="pmax">Entrée gratuite. Pour des raisons de logistique merci de vous inscrire avec le bouton ci-dessous.</p>
						<hr>

					<div class="row" style="text-align: center;margin: 15px;">
						<input type="button" class="btn-info" value="Plan d'accès" onclick=" relocate_home()">
						<input type="button" class="btn-danger" value="Inscription" onclick=" inscription()">
					</div>
					
					<p class="pmax">Partenaires présents</p>
					<table class="blueTable">
						<tr>
							<td><img src="img/logos/GRDF.png" width="70px" alt="logo grdf"></td>
							<td><img src="img/sponsors/edf.png" width="70px" alt="logo edf"></td>
							<td><img src="img/logos/citemetrie.png" width="70px" alt="logo citémétrie"></td>
							<td><img src="img/logos/capeb3.jpg" width="70px" alt="logo capeb"></td>
						</tr>
						<tr>
							<td><img src="img/ffb83.jpg" width="80px" alt="logo FFB"></td>
							<td><img src="img/logos/isol_sudest.png" width="90px" alt="logo isol sud est"></td>
							<td><img src="img/logos/logo_adobat.png" width="80px" alt="logo adobat"></td>
							<td><img src="img/logos/logo_clim_var.png" width="90px" alt="logo clim Var froid"</td>
						</tr>
						<tr>
							<td><img src="img/logos/gasquet.png" width="100px" alt="logo Gasquet"></td>
							<td><img src="img/logos/LOGO-RENOVEA-CMJN.png" width="90px" alt="logo Renovea"></td>
							<td><img src="img/logos/SP_iso.jpg" width="80px" alt="logo SP Isolation"></td>
							<td><img src="img/logos/zenith_habitat_noir.png" width="90px" alt="logo Zenith Habitat"</td>
						</tr>

					</table>


				</div>
			</div>
		</div>
	</body>

</html>