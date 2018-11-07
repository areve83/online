<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AREVE 83 - ANAH</title>

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
		<li><a href="faq.php">Questions fréquentes</a>
		</li>
		<li class="active">Propriétaires bailleurs</li>

	</ul>
	<div class="container">
		<p>L’Anah gère le programme national « Habiter Mieux » destiné à aider les propriétaires occupants ayant des ressources inférieures à un certain plafond à financer des travaux de rénovation énergétique pour leur logement.
		<br><br>Sur le territoire de l'AREVE, des programmes spécifiques ont été instaurés dans certaines communes. Il s’agit d’accompagner les projets de rénovation de l'habitat privé ancien : diagnostic, conseil et attribution des aides de l’Anah augmentées dans certains cas d’aides régionales ou communales (selon accords locaux).<br>
		<b>Attention, les travaux ne doivent pas être commencés avant le dépôt de votre dossier.</b></p>
	</div>

	<div class="container">
		<!--TVA-->
		<div class="panel panel-default">

			<!--éligibilité-->
			<div class="panel-heading">
				<h4 class="panel-title" style="font-weight: bold;"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">Qui y est éligible ?</a></h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
				<div class="panel-body">
					<p>Cette aide est réservée aux propriétaires bailleurs et propriétaires occupants, pour les logements achevés depuis plus de 15 ans.<br>
					Pour les propriétaires occupants, vous trouverez ci-dessous le plafond de ressources à ne pas dépasser pour les habitants des Bouches-du-Rhône, pour bénéficier de cette aide :</p>
					<img src="../img/plafonds_anah.PNG" style="max-width:100%">
					<p>Ces montants sont des revenus fiscaux de référence indiqués sur votre feuille d’impôts. Pour une demande d'aide déposée en 2018, il faut prendre en compte le revenu fiscal de l'année 2016 (voir l'avis d'impôt adressé en 2017).<br>
					Ces plafonds sont remis à jour au début de chaque année et s'appliquent à compter du 1er janvier de l'année en cours.</p>
					<p><a href="http://www.anah.fr/proprietaires/proprietaires-occupants/les-conditions-de-ressources/" target="_blank">Source : Anah</a></p>
				</div>
			</div>
			<!--éligibilité-->
			<!--montant des aides-->
			<div class="panel-heading">
				<h4 class="panel-title" style="font-weight: bold;"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse2">Quels travaux sont concernés ? Quels montants d'aides ?</a></h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">
					<p>Les aides de l’Anah sont mobilisables pour :
						<ul>
							<li>Rénover durablement un logement vacant ou très vétuste.</li>
							<li>Adapter votre logement au vieillissement ou au handicap : élargissement des portes, monte escalier, salle de douche, etc.</li>
							<li>Réaliser des travaux de rénovation énergétique (chauffage, d’isolation, etc.)</li>
						</ul>
						Concernant les travaux de rénovation énergétique, ceux-ci doivent garantir une amélioration de la performance énergétique du logement d’au moins 25% (pour les propriétaires occupants) ou 35% (pour les propriétaires bailleurs).
						<br>Le montant maximum de cette aide est compris entre 7.000 et 10.000 € en fonction des revenus du ménage. Elle est cumulable avec le crédit d’impôt et l'éco-prêt à taux zéro (voir notre page « Cumul des aides »).
						<br>De plus, une prime pouvant aller jusqu'à 1.600 ou 2.000 € est également versée pour le gain énergétique d'au moins 25% obtenu grâce aux travaux.
						<br>A partir du 1er janvier 2019, les travaux devront avoir été réalisés par une entreprise RGE.		
						<p>Pour connaître les aides et les accompagnements disponibles sur le territoire, vous pouvez contacter :
							<ul>
								<li>Pour le territoire de la CAVEM : 0 805 69 20 49, ou par courriel :<a href="mailto:pig-cavem@citemetrie.fr">pig-cavem@citemetrie.fr</a></li>
								<li>Pour les communes situées en Dracénie : 04 98 10 72 35 (Direction Habitat de la Communauté d'Agglomération Dracénoise)</li>
								<li>Pour les habitants de la Communauté de Communes du Pays de Fayence : ADIL au 04 94 22 65 80 (touche 3)</li>
							</ul>
							Les plafonds de ressources pour les propriétaires occupants modestes et très modestes sont disponibles dans la question « Qui y est éligible ? » ci-dessus.</p>
				</div>
			</div>
			<!--montant des aides-->
			<!--démarches-->
			<div class="panel-heading">
					<h4 class="panel-title" style="font-weight: bold;"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">Quelles démarches dois-je effectuer pour en bénéficier ?</a></h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Une équipe spécifique vous accompagne gratuitement sur rendez-vous et, à partir d’une visite du logement concerné, élabore avec vous :
							<ul>
								<li>un diagnostic technique du bâti ;</li>
								<li>un diagnostic de performance énergétique et les préconisations de travaux pour permettre des économies de charges ;</li>
								<li>votre projet de travaux ;</li>
								<li>une étude financière personnalisée ;</li>
								<li>le montage administratif du dossier de demande de subvention.</li>
							</ul>
							Attention, les travaux ne doivent pas être commencés avant le dépôt de votre dossier.
							<br>Vous trouverez ci-dessous les coordonnées de l’opérateur local qui vous accompagnera dans votre projet :
							<ul>
								<li>Pour le territoire de la CAVEM : 0 805 69 20 49, ou par courriel :<a href="mailto:pig-cavem@citemetrie.fr">pig-cavem@citemetrie.fr</a></li>
								<li>Pour les communes situées en Dracénie : 04 98 10 72 35 (Direction Habitat de la Communauté d'Agglomération Dracénoise)</li>
								<li>Pour les habitants de la Communauté de Communes du Pays de Fayence : ADIL au 04 94 22 65 80 (touche 3)</li>
							</ul></p>
					</div>
				</div>
			<!--démarches-->
			<!--syndicat-->
			<div class="panel-heading">
					<h4 class="panel-title" style="font-weight: bold;"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse4">Un syndicat de copropriétaires peut-il être aidé ?</a></h4>
				</div>
				<div id="collapse4" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Oui, les aides de l'Anah peuvent être versée à votre syndicat de copropriétaires, selon le niveau de difficulté de la copropriété.
						<h3 class="header-h3">Pour les copropriétés fragiles : Habiter Mieux - Copropriété</h3>
						L’Anah propose depuis 2017 une nouvelle aide collective pour financer les travaux de rénovation énergétique des copropriétés « fragiles ». L'aide Habiter Mieux - Copropriété est attribuée au syndicat de copropriétaires pour un programme de travaux permettant un gain énergétique de 35 % minimum. Cette aide comprend deux subventions :
						<ul>
							<li>La prise en charge d’une assistance à maîtrise d’ouvrage (AMO) : jusqu’à 180€ par logement. L'AMO accompagne tout au long du projet toutes les instances de gestion : syndic, syndicat de copropriétaires, conseil syndical. Elle aide notamment la copropriété à monter son plan de financement et à solliciter les aides financières.</li>
							<li>Une aide financière pour les travaux, pouvant atteindre jusqu'à 25% du montant total des travaux HT. L’aide de l’Anah est de 5 250 € maximum par logement.</li>
							Pour bénéficier de l’aide, la copropriété doit :
								<ul>
									<li>avoir été construite avant le 1er juin 2001 ;</li>
									<li>comporter au minium 75% de lots d'habitation occupés en résidence principale ;</li>
									<li>avoir une étiquette énergie évaluée entre D et G ;</li>
									<li>avoir un budget prévisionnel annuel affichant un taux d'impayés compris entre 8% et 15% pour les copropriétés de plus de 200 lots, ou entre 8% et 25% pour les copropriétés de moins de 200 lots.</li>
									<li>être inscrite sur le registre d'immatriculation des copropriétés.</li>
									Si la copropriété est éligible à cette aide, tous les copropriétaires occupants ou bailleurs en bénéficient, pour leur quote-part, sans conditions de ressources des occupants du logement.
								</ul>
						</ul>
						<b>Pour bénéficier de la prise en charge d'une prestation d'Assistance à Maîtrise d'Ouvrage, le syndic (professionnel ou bénévole) doit déposer un dossier auprès du service instructeur dont il dépend : <a href="http://www.anah.fr/proprietaires/carte-des-services-instructeurs-des-aides-de-lanah/" target="_blank">consulter la carte.</a></b>
						<hr>
						<p><b>Pour les copropriétés en grande difficulté : L'aide au syndicat de copropriétaires</b></p>
						<p>Cette aide peut être demandée par votre syndicat si votre copropriété est en grande difficulté et fait partie d'un dispositif d'intervention de l'Anah (« Opération programmée »). Ou si votre copropriété est concernée par une situation d'habitat indigne, un Plan de sauvegarde, ou une administration provisoire. <br>Par ailleurs, même si votre copropriété n'est pas en difficulté, des travaux de mise en accessibilité peuvent être financés par l'Anah via votre syndicat de copropriétaires. 50% du montant total des travaux HT peuvent être pris en charge. Le montant maximum est de 10 000 € par accès aménagé.</p>
						<p>Source :<a href="http://www.anah.fr/" target="_blank">Anah</a></p>
					</div>
				</div>
			<!--syndicat-->
		</div>
	</div>

		<footer class="text-center">
		<div class="container">
				<p>Copyright © Agence Locale de l’Energie et du Climat de la Métropole Marseillaise / AREVE. Tous droits réservés.</p><img src="img/logos/Logo ALEC horiz Coul .jpg"  style="max-width: 120px; margin-right: 15px">
				<img src="../img/logo.png"  style="max-width: 60px">
		</div>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery-1.11.2.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../js/bootstrap.min.js"></script>
</body>
</html>