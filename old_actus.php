<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>AREVE 83 - Archives actualités</title>

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
		
		.card {
			background: #FFF;
			display: block;
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			border: 1px solid #AAA;
			border-bottom: 3px solid #BBB;
			padding: 0px;
			margin-top: 5em;
			overflow: hidden;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: 'Open sans', sans-serif;
			-webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}
		
		.card-body {
			margin: 1em;
		}
		
		.pull-left {
			float: left;
		}
		
		.pull-none {
			float: none !important;
		}
		
		.pull-right {
			float: right;
		}
		
		.card-header {
			width: 100%;
			color: #2196F3;
			border-bottom: 3px solid #BBB;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: 'Open sans', sans-serif;
			padding: 0px;
			margin-top: 0px;
			overflow: hidden;
			-webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}
		
		.card-header-blue {
			background-color: #2196F3;
			color: #FFFFFF;
			border-bottom: 3px solid #BBB;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: 'Open sans', sans-serif;
			padding: 0px;
			margin-top: 0px;
			overflow: hidden;
			-webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}
		
		.card-header-red {
			background-color: #F44336;
			color: #FFFFFF;
			border-bottom: 3px solid #BBB;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: 'Open sans, sans-serif;
 padding: 0px;
			margin-top: 0px;
			overflow: hidden;
			-webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}
		
		.card-header-grey {
			background-color: #424242;
			color: #FFFFFF;
			border-bottom: 3px solid #BBB;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: 'Open sans', sans-serif;
			padding: 0px;
			margin-top: 0px;
			overflow: hidden;
			-webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}
		
		.card-header-orange {
			background-color: #E65100;
			color: #FFFFFF;
			border-bottom: 3px solid #BBB;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: 'Open sans', sans-serif;
			padding: 0px;
			margin-top: 0px;
			overflow: hidden;
			-webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}
		
		.card-header-pink {
			background-color: #E91E63;
			color: #FFFFFF;
			border-bottom: 3px solid #BBB;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: 'Open sans', sans-serif;
			padding: 0px;
			margin-top: 0px;
			overflow: hidden;
			-webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}
		
		.card-heading {
			display: block;
			font-size: 24px;
			line-height: 28px;
			margin-bottom: 24px;
			margin-left: 1em;
			border-bottom: 1px #2196F3;
			color: #fff;
		}
	</style>

	<script src="js/jquery-3.2.1.js" type="text/JavaScript">
	</script>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78353130-1">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push( arguments )
		};
		gtag( 'js', new Date() );

		gtag( 'config', 'UA-78353130-1' );
	</script>
	<script>
		$( document ).ready( function () {
			var activeSystemClass = $( '.list-group-item.active' );

			//something is entered in search form
			$( '#system-search' ).keyup( function () {
				var that = this;
				// affect all table rows on in systems table
				var tableBody = $( '.table-list-search tbody' );
				var tableRowsClass = $( '.table-list-search tbody tr' );
				$( '.search-sf' ).remove();
				tableRowsClass.each( function ( i, val ) {

					//Lower text for case insensitive
					var rowText = $( val ).text().toLowerCase();
					var inputText = $( that ).val().toLowerCase();
					if ( inputText != '' ) {
						$( '.search-query-sf' ).remove();
						tableBody.prepend( '<tr class="search-query-sf"><td colspan="6"><strong>Recherche: "' +
							$( that ).val() +
							'"</strong></td></tr>' );
					} else {
						$( '.search-query-sf' ).remove();
					}

					if ( rowText.indexOf( inputText ) == -1 ) {
						//hide rows
						tableRowsClass.eq( i ).hide();

					} else {
						$( '.search-sf' ).remove();
						tableRowsClass.eq( i ).show();
					}
				} );
				//all tr elements are hidden
				if ( tableRowsClass.children( ':visible' ).length == 0 ) {
					tableBody.append( '<tr class="search-sf"><td class="text-muted" colspan="6">Pas de correspondance.</td></tr>' );
				}
			} );
		} );
	</script>
	<script>
		$( document ).ready( function () {
			$( 'th' ).each( function ( col ) {
				$( this ).hover(
					function () {
						$( this ).addClass( 'focus' );
					},
					function () {
						$( this ).removeClass( 'focus' );
					}
				);
				$( this ).click( function () {
					if ( $( this ).is( '.asc' ) ) {
						$( this ).removeClass( 'asc' );
						$( this ).addClass( 'desc selected' );
						sortOrder = -1;
					} else {
						$( this ).addClass( 'asc selected' );
						$( this ).removeClass( 'desc' );
						sortOrder = 1;
					}
					$( this ).siblings().removeClass( 'asc selected' );
					$( this ).siblings().removeClass( 'desc selected' );
					var arrData = $( 'table' ).find( 'tbody >tr:has(td)' ).get();
					arrData.sort( function ( a, b ) {
						var val1 = $( a ).children( 'td' ).eq( col ).text().toUpperCase();
						var val2 = $( b ).children( 'td' ).eq( col ).text().toUpperCase();
						if ( $.isNumeric( val1 ) && $.isNumeric( val2 ) )
							return sortOrder == 1 ? val1 - val2 : val2 - val1;
						else
							return ( val1 < val2 ) ? -sortOrder : ( val1 > val2 ) ? sortOrder : 0;
					} );
					$.each( arrData, function ( index, row ) {
						$( 'tbody' ).append( row );
					} );
				} );
			} );
		} );
	</script>
</head>

<body>
	<?php include ("nav.php"); ?>

	<ol class="breadcrumb">
		<li><a href="index.php">Accueil</a>
		</li>
		<li class="active">Anciennes actualités</li>
	</ol>

	<h3 style="text-align: center;color: darkred;margin-top: 70px">Archives</h3>
	<hr>
	<div class="container" style="margin-top: 20px">
		<div class="row">
			<div class="col-md-9">
				
				<p class="pmax" style="color: black"><b>Journées de la Rénovation en Dracénie</b>
				</p>
				<p><i>Date : 3 février 2018</i>
				</p>
				<p>Samedi 3 février 2018 au Château Ste Roseline</p>
				<p>Présentation du salon : <a href="journees_ste_roseline.php" target="_blank">4ème Journée de la Rénovation.</a>
				</p>
				<hr>

				<p class="pmax" style="color: black"><b>Inauguration des nouveaux locaux de Draguignan</b>
				</p>
				<p><i>Date : 11 décembre 2017</i>
				</p>
				<p>Le 11 décembre à 17h, Monsieur Audibert-Troin, Président de la Communauté d'Agglomération Dracénoise, et Monsieur Chabert, Président de l'AREVE, ont inauguré les nouveaux locaux de l'AREVE.<br>Retour en images sur ce sympathique moment.<br>
					<a class="label label-primary" href="inauguration_draguignan.php" target="_blank"> Galerie photo.</a>
					<hr>
					<p class="pmax">3èmes Journées de la Rénovation</p>
					<p><i>Date : 8 et 9 décembre 2017</i>
					</p>
					<p>Présentation du salon : <a href="journees_dec_17.php" target="_blank">3èmes Journées de la Rénovation.</a>
					</p>
					<p>Retrouvez la présentation de ces journées de la Rénovation dans la présentation réalisée par Mosaïque FM le 22/12/2017: (à partir de 27'39):</p>
					<iframe scrolling="no" id="hearthis_at_track_1716370" width="100%" height="150" src="https://hearthis.at/embed/1716370/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=" frameborder="0" allowtransparency>
						<p>Listen to <a href="https://hearthis.at/mosaique-fm-zw/ici-cest-la-cavem-04-221217-planete-cavem-le-scot-avec-sebastien-perrin-et-la-renovation-des-logements/" target="_blank">Ici C'est la Cavem 04 221217 Planete CAVEM, le SCOT avec Sebastien Perrin et la Renovation des Logements</a> <span>by</span><a href="https://hearthis.at/mosaique-fm-zw/" target="_blank">Mosaique FM</a> <span>on</span> <a href="https://hearthis.at/" target="_blank">hearthis.at</a>
						</p>
					</iframe>
					<hr>

					<p class="pmax">Lancement de la concertation pour la rénovation énergétique des bâtiments</p>
					<p><i>Décembre 2017</i></p>
					<p>Le Gouvernement lance, dans le cadre du Plan climat, un plan de rénovation énergétique et une concertation pour l’ enrichir . Le but: mobiliser tous les acteurs pour accélérer la rénovation des bâtiments mal isolés afin d’ améliorer le quotidien des Français et contribuer ainsi aux objectifs de neutralité carbone à l’ horizon 2050. N’ hésitez pas à donner votre avis, vos bonnes idées, vos remarques sur la plateforme en ligne.</p>
				<a class="label label-danger" href="http://www.consultations-publiques.developpement-durable.gouv.fr/concertation-sur-le-projet-de-plan-de-renovation-a1767.html" target="_blank"> Accès à la plateforme</a>
				<hr>


				<p class="pmax">La plaquette de l'AREVE est arrivée</p>
				<p><i>Novembre 2017</i></p>
				<p>Vous pouvez télécharger notre plaquette en suivant ce lien : </p>
					<a class="label label-primary" href="img/plaquette_AREVE.pdf" alt="plaquette">Télécharger</a>
				<hr>

				<p class="pmax"> Alerte crédit d'impôt</p>
				<p><i>Date : 10 octobre 2017</i>
				</p>
				<p>Ca bouge autour du Crédit d'Impôt Transition Energétique ! Prolongation du crédit d'impôt transition énergétique en 2018 en faveur des économies d'énergie et de la chaleur renouvelable et nouvelles annonces modifiant les critères d’obtention. Lien pour voir l’amendement et résumé des conditions d'obtention.</p>
				<a href="https://www.actu-environnement.com/media/pdf/news-29823-amendement-cite.pdf" target="_blank">Téléchargement du document.</a>
				<hr>

			</div>
		</div>
	</div>
</body>

</html>