<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AREVE 83 - Questions fréquentes</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/main.css">
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78353130-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-78353130-1');
</script>
  
    
<style>
    .faqTitle {
        color:#cc3300;
        font-weight: bold;
               }

    a.faqText {
        color: black;
        font-size: 1.1em;
        margin: 0;
              }
</style>

</head>
    
<body>

<?php include("../nav.php"); ?>

<ul class="breadcrumb" style="margin-top:80px;">
    <li><a href="../index.php">Accueil</a></li>
    <li><a href="../particuliers.php">Particuliers</a></li>
        <li><a href="faq.php">FAQ</a></li>
    <li class="active">Matériaux</li>
</ul>
    
<div class="container" style="padding: 10px">
    <div class="row">
        <div class="col-lg-12">
        <p>Le choix d'un matériau d’isolation va dépendre d’un grand nombre de paramètres : du type de surface à isoler (paroi horizontale ou verticale, rampants), de la surface disponible, du type de mur ou de toiture, de la présence ou non d’un système de ventilation. Pour être sûr de choisir un matériau correspondant aux caractéristiques de votre logement, vous pouvez également faire appel à nos Conseillers qui vous aideront à étudier votre projet.</p>
            <img class="img-responsive center-block" src="../img/acermi.jpg" style="max-width:200px;margin-top: 10px;margin-bottom: 10px">

        <p><strong>L’étiquette ACERMI,</strong> apposée sur un isolant en garantit la qualité : résistance thermique R, classement au feu euroclasse, etc. Elle constitue la carte d’identité du produit. Les isolants disposant d’une étiquette sont soumis à un Avis Technique, document attestant de l’expertise de manière neutre et impartiale par un groupe de spécialistes, sur l’emploi d’un produit ou système destiné à la construction. L’Avis Technique atteste des performances techniques et réglementaires du produit. Sans être obligatoire, un Avis Technique reste un gage de qualité du produit qui dispose ainsi d’une vérification de ses performances. </p>
            <p><i>Le tableau ci-dessous permet de comparer les principales caractéristiques des matériaux d’isolation.</i></p>
             <a href="../img/Tableau_isolants.jpg" target="_blank"><img class="img-responsive center-block" src="../img/Tableau_isolants.jpg" style="max-width:400px;margin-top: 10px;margin-bottom: 10px" alt="tableau isolants"></a>
        <h4 style="color: brown"><strong>Quelles sont les performances des "isolants minces réfléchissants ?"</strong></h4>
        <p>L’ADEME a émis un avis sur les Produits Minces Réfléchissants (PMR). La conclusion de cet avis étant la suivante : « Les résultats des études réalisées dans le cadre du programme national de recherche et d’expérimentation sur l’énergie dans le bâtiment ont montré que les niveaux de résistance thermique atteints par les PMR seuls, notamment en thermique d’hiver, ne correspondent pas aux niveaux requis par la réglementation. <br>Dans ces conditions, l’utilisation des PMR est plutôt à envisager en complément d’isolation thermique. Les performances des PMR dépendant fortement de la qualité de leur pose, l’ADEME recommande de faire appel à des professionnels pour les travaux d’isolation. »<a href="../img/ADEME_-avis-sur-produits-minces-reflechissants-pmr-2012.pdf" target="_blank">Cliquez ici pour lire l'avis.</a></p>
        <h4 style="color: brown"><strong>Qu'est-ce qu'un "Pare-vapeur" ? Dans quels cas en utilise-t-on ?</strong></h4>
        <p>Le pare-vapeur permet de limiter la transmission de la vapeur d’eau dans la paroi et d’assurer l'imperméabilité à l’air du bâtiment. Celle-ci est primordiale : un défaut, et la part de consommation d’énergie due au chauffage du bâtiment peut augmenter de 4 à 10%, ce qui est loin d’être négligeable. <br>Attention! Le pare-vapeur se doit d’être continu, tel une peau. Pour cela il faut obligatoirement jointoyer les pares vapeur de manière homogène à l’aide de colles, de produits et d’adhésifs spécifiques. Vous trouverez plus d'informations dans notre page sur l'étanchéité à l'air.</p>

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
var modal = document.getElementById("myModal");
var img = document.getElementById("myImg");
var img1 = document.getElementById("img1");
var caption = document.getElementById("caption");
var close = document.getElementsByClassName("close")[0];

img.onclick = function() {
	modal.style.display = "block";
	img1.src = this.src;
	caption.innerHTML = this.alt;
}

close.onclick = function() {
	modal.style.display = "none";
}

window.onclick = function(e) {
	if(e.target == modal) {
		modal.style.display = "none";
	}
}
</script>
</body>
</html>
