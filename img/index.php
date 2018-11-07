<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<title>Agence de Rénovation énergétique Var Est</title>
	<meta name="description" content="Service public d'accompagnement pour les propriétaires est-varois de maisons individuelles et les copropriétés dans leurs projets de travaux de rénovation, d'isolation ou de chauffage. Elle apporte conseils techniques et financiers gratuits et neutres."/>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<style>

	</style>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.2.min.js"></script>
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
		function relocate_home() {
			location.href = "https://goo.gl/maps/J5cYrPNPVK62";
		}
	</script>
	<script>
		function relocate_dragui() {
			location.href = "https://goo.gl/maps/At8JdoV23Vu";
		}
	</script>
</head>

<body>
	<?php include ("nav.php"); ?>

	<div class="container">
		<h2 class="header-1">ACTUALITES</h3>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item active">
					<img src="img/noel_travaux.png">
					<div class="carousel-caption">
						<p class="pmax" style="color: black"><b>Fermeture annuelle</b></p>
						<p style="color: black"><b>L'AREVE sera fermée à compter du 22 décembre à 17h. Réouverture le 3 janvier 2018.</b><br>
						Nous vous souhaitons de très bonnes fêtes de fin d'année et une année 2018 pleine de projets !
						<br>Vous pouvez nous contacter par mail, nous reviendrons vers vous dès le 3 janvier.<br><a class="label label-primary" href="contact.php" target="_blank">Contact</a>
					</div>
				</div>
				<!-- End Item -->

				<div class="item">
					<img src="img/thermo_immeuble.png">
					<div class="carousel-caption">
						<p class="pmax" style="color: black"><b>Thermographie de votre logement.</b></p>

						<p style="color: black">Grâce à plusieurs outils disponibles en interne et à nos partenaires, les techniciens de l'AREVE peuvent vous montrer et analyser avec vous la qualité thermique de votre logement. Un service nouveau, simple et ludique à découvrir. <br><a class="label label-primary" href="thermo.php" alt="lien thermo"></p>Savoir +</a>
						
					</div>
				</div>
				<!-- End Item -->

				<div class="item">
					<img src="img/chabran.png">
					<div class="carousel-caption">
						<p class="pmax" style="color: black"><b>Inauguration des nouveaux locaux de Draguignan</b></p>
						<p>Le 11 décembre à 17h, Monsieur Audibert-Troin, Président de la Communauté d'Agglomération Dracénoise, et Monsieur Chabert, Président de l'AREVE, ont inauguré les nouveaux locaux de l'AREVE.<br>Retour en images sur ce sympathique moment.<br>
							<a class="label label-primary" href="inauguration_draguignan.php" target="_blank"> Galerie photo.</a>
					</div>
				</div>
				<!-- End Item -->

				<div class="item">
					<img src="img/plan_reno.png">
					<div class="carousel-caption">
						<p class="pmax" style="color: black"><b>Lancement de la concertation pour la rénovation énergétique des bâtiments</b></p>
						<p style="color: black">Le Gouvernement lance, dans le cadre du Plan climat, un plan de rénovation énergétique et une concertation pour l’enrichir. Le but : mobiliser tous les acteurs pour accélérer la rénovation des bâtiments mal isolés afin d’améliorer le quotidien des Français et contribuer ainsi aux objectifs de neutralité carbone à l’horizon 2050. N’hésitez pas à donner votre avis, vos bonnes idées, vos remarques sur la plateforme en ligne.</p>
						<a class="label label-danger" href="http://www.consultations-publiques.developpement-durable.gouv.fr/concertation-sur-le-projet-de-plan-de-renovation-a1767.html" target="_blank">Accès à la plateforme.</a>
					</div>
				</div>
				<!-- End Item -->

				<div class="item">
					<img src="img/permanences.png">
					<div class="carousel-caption">
						<p class="pmax" style="color: black"><b>Permanence aux Arcs en 2018</b></p>
						<p style="color: black">L'AREVE poursuit son déploiement sur le territoire et va à votre rencontre !<br>Une nouvelle permanence se tiendra en 2018 à la Mairie des Arcs.<br>
							<a class="label label-danger" href="permanences.php" target="_blank">Plus d'informations.</a></p>
					</div>
				</div>
				<!-- End Item -->

			</div>
			<!-- End Carousel Inner -->

			<ul class="list-group col-sm-4">
				<li data-target="#myCarousel" data-slide-to="0" class="list-group-item active">
					<h5>FETES DE FIN D'ANNEE</h5>
				</li>
				<li data-target="#myCarousel" data-slide-to="1" class="list-group-item">
					<h5>NOUVEAU</h5>
				</li>
				<li data-target="#myCarousel" data-slide-to="2" class="list-group-item">
					<h5>EVENEMENT</h5>
				</li>
				<li data-target="#myCarousel" data-slide-to="3" class="list-group-item">
					<h5>PLAN NATIONAL POUR LA RENOVATION</h5>
				</li>
				<li data-target="#myCarousel" data-slide-to="4" class="list-group-item">
					<h5>NOUVELLE PERMANENCE</h5>
				</li>

			</ul>

			<!-- Controls -->
			<div class="carousel-controls">
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<p style="margin-top: 10px"><a href="old_actus.php">Anciennes actualités</a></p>
		</div>
		<!-- End Carousel -->
	</div>
	
	<div class="container">
		<div class="row>">
			
			<div class="col-md-4">
				<div class="card">
					<div class="card-content">
						<div class="card-header-orange">
							<h1 class="card-heading">PARTICULIERS</h1>
						</div>
						<div class="card-body">
							<p class="card-p">
							Vous avez un projet de rénovation et vous souhaiteriez être accompagné ? Bénéficiez d'un conseil neutre et gratuit grâce à nos conseillers.                            
							</p>
						</div>
						<nav class="nav-tabs">
							<ul class="nav nav-pills pull-left">
								<li ><a class="card-action-grey" href="particuliers.php">Savoir +</a></li>
								<li ><a class="card-action-grey" href="faq.php">FAQ</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-content">
						<div class="card-header-red">
							<h1 class="card-heading">PROFESSIONNELS</h1>
						</div>
						<div class="card-body">
							<p class="card-p">
								Participez à la rénovation et faites vous connaître dans notre région en devenant partenaire de l'AREVE !
							</p>
						</div>
						<nav class="nav-tabs">
							<ul class="nav nav-pills pull-left">
								<li><a class="card-action-grey" href="pros.php">Savoir +</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-content">
						<div class="card-header-blue">
							<h1 class="card-heading">THERMOGRAPHIE</h1>
						</div>
						<div class="card-body">
							<p class="card-p">
							Une autre façon de voir votre habitat, grâce aux technologies de thermographie.<br>En avion, à pied ou par drone, l'AREVE vous propose plusieurs solutions pour connaître les performances thermiques de votre logement.</p>
						</div>
						<nav class="nav-tabs">
							<ul class="nav nav-pills pull-left">
								<li ><a class="card-action-grey" href="thermo.php">Savoir +</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-content">
						<div class="card-header-grey">
							<h1 class="card-heading">COPROPRIETES</h1>
						</div>
						<div class="card-body">
							<p class="card-p">
							L'Areve peut vous accompagner dans le projet de rénovation de votre copropriété. Syndic, ASL, propriétaire, prenez contact avec nos conseillers.
							</p>
						</div>
						<nav class="nav-tabs">
							<ul class="nav nav-pills pull-left">
								<li ><a class="card-action-grey" href="copros.php">Savoir +</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="card-content">
						<div class="card-header-orange">
							<h1 class="card-heading">AGENDA</h1>
						</div>
						<div class="card-body">
							<p class="card-p">
							Suivez les événements de l'AREVE organisés autour de la rénovation énergétique.<br>Consultez également les prochaines permanences qui auront lieu sur le territoire.                           
							</p>
						</div>
						<nav class="nav-tabs">
							<ul class="nav nav-pills pull-left">
								<li ><a class="card-action-grey" href="agenda.php">Agenda</a></li>
								<li ><a class="card-action-grey" href="permanences.php">Permanences</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card">
					<div class="card-content">
						<div class="card-header-red">
							<h1 class="card-heading">NOS PARTENAIRES</h1>
						</div>
						<div class="card-body">
							<p class="card-p">
							Consultez la liste des entreprises signataires de la charte de partenariat.<br>Vous pouvez également consulter le site des entreprises RGE.                  
							</p>
						</div>
						<nav class="nav-tabs">
							<ul class="nav nav-pills pull-left">
								<li ><a class="card-action-grey" href="page_partenaires.php">Liste</a></li>
								<li ><a class="card-action-grey" href="http://renovation-info-service.gouv.fr/trouvez-un-professionnel">Entreprises RGE</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<footer>
		<!--Nous contacter-->
	<div class="container"  style="border-top: solid 1px black;margin-top: 25px">
		<div class="row">
			<div class="col-md-12">
				<p class="pmax" style="text-align: center;">Les soutiens de l'AREVE</p>
				<table width="100%" style="text-align:center">
					<tr>
						<td><a href="http://www.cavem.fr" target="_blank"> <img src="img/sponsors/logo_cavem.png" height="60px"></a>
						</td>
						<td><a href="http://www.dracenie.com" target="_blank"> <img src="img/sponsors/cad.png" width="60px"></a>
						</td>
						<td><a href="http://www.cc-paysdefayence.fr/" target="_blank"><img src="img/sponsors/ccpf.jpg" height="60px"></a>
						</td>
						<td><a href="http://www.ademe.fr/" target="_blank"><img src="img/sponsors/logo_ADEME.png" height="60px"></a>
						</td>
						<td><a href="http://www.regionpaca.fr/" target="_blank"><img src="img/sponsors/logo-cr-paca.png" height="60px"></a>
						</td>
						<td><a href="Partenaires/edf.php" target="_blank"><img src="img/sponsors/edf.png" width="60px"></a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
		<div class="container"  style="border-top: solid 1px black;margin-top: 15px">
			<div class="row">
				<div>
					<p class="pmax" style="text-align: center">Pour nous contacter : 0 808 800 083</span><br>Mail : <a href="mailto:contact@areve83.fr" style="text-decoration: none;" target="_blank">contact@areve83.fr</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6">
					<h4 style="text-align: right;font-weight: bold">Siège social</h4>
					<p style="text-align: right">Techno Parc Epsilon 1<br>400, avenue Isaac Newton<br>83 700 Saint-Raphaël
					<br>
					<input type="button" class="btn btn-default" value="Plan d'accès" onclick=" relocate_home()"></p>
				</div>

				<div class="col-lg-6 col-sm-6">
					<h4 style="font-weight: bold">Antenne Dracénoise</h4>
					<p>Pépinière d'entreprise - Bât. B<br>Espace Chabran<br>169 Avenue de la 1ère Armée<br>83 300 Draguignan
					<br>
					<input type="button" class="btn btn-default" value="Plan d'accès" onclick=" relocate_dragui()"></p>
				</div>
				<div class="col-lg-12" style="text-align: center">
					<a href="mentions.html" style="text-decoration: none;color: white" target="_blank">Mentions légales</a>
				</div>
			</div>
		</div>
	</footer>
	<!--Fin Nous contacter-->

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$( document ).ready( function () {

			var clickEvent = false;
			$( '#myCarousel' ).carousel( {
				interval: 4000
			} ).on( 'click', '.list-group li', function () {
				clickEvent = true;
				$( '.list-group li' ).removeClass( 'active' );
				$( this ).addClass( 'active' );
			} ).on( 'slid.bs.carousel', function ( e ) {
				if ( !clickEvent ) {
					var count = $( '.list-group' ).children().length - 1;
					var current = $( '.list-group li.active' );
					current.removeClass( 'active' ).next().addClass( 'active' );
					var id = parseInt( current.data( 'slide-to' ) );
					if ( count == id ) {
						$( '.list-group li' ).first().addClass( 'active' );
					}
				}
				clickEvent = false;
			} );
		} )
		$( window ).load( function () {
			var boxheight = $( '#myCarousel .carousel-inner' ).innerHeight();
			var itemlength = $( '#myCarousel .item' ).length;
			var triggerheight = Math.round( boxheight / itemlength + 1 );
			$( '#myCarousel .list-group-item' ).outerHeight( triggerheight );
		} );
	</script>

</body>

</html>