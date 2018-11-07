<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>areve 83 - Précarité énergétique</title>
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

  <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<?php include("nav.php"); ?>

	<ul class="breadcrumb" style="margin-top:80px;">
		<li><a href="index.php">Accueil</a>
		</li>
		<li><a href="particuliers.php">Particuliers</a>
		</li>
		<li><a href="faq.php">Questions fréquentes</a>
		</li>
		<li class="active">Isolation par intérieur ou extérieur ?</li>
	</ul>

	<div class="container">
		<div class="row">
			<p class="pmax">Est-il préférable d'isoler par l'intérieur ou par l'extérieur ?</p>
			<p>Le choix du matériau d’isolation va dépendre d’un grand nombre de paramètres : du type de surface à isoler (paroi horizontale ou verticale, rampants), de la surface disponible, du type de mur ou de toiture, de la présence ou non d’un système de ventilation, etc.<br>
			
			<div class="col-lg-12">
				<p>Le tableau ci-dessous permet de comparer les avantages et inconvénients de chaque solution :<i>(cliquez pour agrandir) </i>: </p>
				<img class="img-responsive center-block" id="myImg" src="img/isolation_murs.jpg" width="500">
				<div id="myModal" class="modal">
					<span class="close">&times;</span>
					<img class="modal-content" id="img1">
					<div id="caption"></div>
				</div>
			</div>
			
			<p class="pmax">Faites appel à un architecte-conseil :</p>
			<p>Attention, les travaux ayant pour effet de modifier l'aspect extérieur d'un bâtiment existant (comme c'est le cas par exemple pour l'isolation par l'extérieur) doivent être précédés du dépôt d'une déclaration préalable de travaux auprès de votre Mairie.
				<br>Vous pouvez également faire appel à un architecte-conseil en amont de votre projet, pour vérifier auprès d’un spécialiste que vous ne partez pas dans une mauvaise direction à la fois architecturale, technique ou administrative. <br>L’architecte-conseil saura vous informer des contraintes réglementaires qui concernent votre projet. Il connaît la région, sait quel type d’architecture est le plus à même d’être accepté par les services instructeurs des permis de construire et déclarations préalables.
				<br>
				Les architectes-conseil sont présents dans la plupart des communes, retrouvez leurs horaires et coordonnées sur le site du CAUE du Var en <a href="http://www.cauevar.fr/" target="_blank"> cliquant ici.</a>
			<p>Vous trouverez plus d'informations sur les règles d'urbanisme sur le site du Service Public en<a href="https://www.service-public.fr/particuliers/vosdroits/N319" target="_blank"> cliquant ici.</a>
			</p>
			<p>Faites appel à nos Conseillers pour la définition de votre projet : ils pourront vous aider dans le choix des travaux, des matériaux, des entreprises, etc...</p>
		</div>
	</div>

</body>

<footer class="text-center">
    <div class="container">
        <p>Copyright © Agence Locale de l’Energie et du Climat de la Métropole Marseillaise. Tous droits réservés.</p><img src="img/logos/Logo ALEC horiz Coul .jpg"  style="max-width: 120px">
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
	var modal = document.getElementById( "myModal" );
	var img = document.getElementById( "myImg" );
	var img1 = document.getElementById( "img1" );
	var caption = document.getElementById( "caption" );
	var close = document.getElementsByClassName( "close" )[ 0 ];

	img.onclick = function () {
		modal.style.display = "block";
		img1.src = this.src;
		caption.innerHTML = this.alt;
	}

	close.onclick = function () {
		modal.style.display = "none";
	}

	window.onclick = function ( e ) {
		if ( e.target == modal ) {
			modal.style.display = "none";
		}
	}
</script>

</html>