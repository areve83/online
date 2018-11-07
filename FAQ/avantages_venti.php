<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>areve 83 - Questions fréquentes</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
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
</head>

<body>

	<?php include("../nav.php"); ?>

	<ul class="breadcrumb" style="margin-top:80px;">
		<li><a href="../index.php">Accueil</a>
		</li>
		<li><a href="../particuliers.php">Particuliers</a>
		</li>
		<li><a href="faq.php">FAQ</a>
		</li>
		<li class="active">Avantages / Inconvénients ventilation</li>
	</ul>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Voici ci-dessous un tableau récapitulatif des avantages et inconvénients de chaque système de ventilation <i>(cliquez pour agrandir) </i>: </h4>
				<img class="img-responsive center-block" id="myImg" src="../img/ventilation_av1000px.png" width="500">
				<div id="myModal" class="modal">
					<span class="close">&times;</span>
					<img class="modal-content" id="img1">
					<div id="caption"></div>
				</div>
			</div>
		</div>
		<p>Votre artisan vous aidera à déterminer le système de ventilation adéquat en fonction des caractéristiques de votre logement (présence ou non de problèmes d’humidité, prix et contraintes d’installation). Si vous remplacez les fenêtres, pensez aux entrées d’air dans les pièces principales. Vous pouvez également faire appel à nos Conseillers qui vous aideront à étudier votre projet.</p>
	</div>
	</div>
	</div>

	</div>

</body>

<footer class="text-center">
<div class="container">
        <p>Copyright © Agence Locale de l’Energie et du Climat de la Métropole Marseillaise. Tous droits réservés.</p><img src="../img/logos/Logo ALEC horiz Coul .jpg"  style="max-width: 120px">
</div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.min.js"></script>
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