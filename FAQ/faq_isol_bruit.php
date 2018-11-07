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
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
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
    <li class="active">Isolation acoustique</li>
</ul>
    
<div class="container" style="padding: 10px">
    <div class="row">
        <div class="col-lg-12">
        <p>Transmis par l’air ou les structures d’un bâtiment, en provenance des activités extérieures, de nos voisins, de nous-même ou des équipements qui nous entourent, le bruit nous accompagne en permanence dans nos logements.</p>
    
        <img class="img-responsive center-block" src="../img/nuances_bruits.png" style="max-width:400px">
        <p>Le bruit peut se transmettre directement par les parois séparatives (mur, plancher, plafond, cloison, fenêtres). Il se transmet également de façon indirecte (ou latérale) par les parois non séparatives entre la source du bruit et l’endroit où on le perçoit. Les transmissions parasites profitent des imperfections localisées (boîtiers électriques...) et des défauts d’étanchéité à l’air (fissures dans les murs, absence de joints aux fenêtres, jonctions entre ouvrages...) : là où l’air passe, le bruit passe.
        <br>Connaître les règles de transmission du bruit vous permettra de mieux comprendre les différentes techniques d’isolation acoustique qui peuvent vous être proposées.</p>
        <ul>
            <p><li><strong>La loi de masse </strong>: plus c’est lourd, mieux ça isole. Autrement dit, à épaisseur égale, une cloison en béton isolera mieux qu’une cloison en carreaux de plâtre, car à volume égal, le béton est plus lourd que le plâtre.    
            </li>
            <li><strong>Le principe « masse-ressort-masse » :</strong> il consiste à utiliser des parois doubles, comme des plaques de plâtre ou des cloisons en briques désolidarisées séparées par un espace rempli avec un isolant souple : laine minérale, de bois, de chanvre, etc. (voir p. 13), qui absorbe et dissipe l’énergie. En rénovation, cette solution permet un traitement efficace sans surcharger les structures et une épaisseur d’isolant moins importante.</p>
        </ul>
        <img class="img-responsive center-block" src="../img/parois_doubles.png" style="max-width:300px">
           <ul><li>
            <p><strong>Le principe d’étanchéité : </strong>là où l’air passe, le bruit passe : sous les portes, par les conduits de cheminée, par les entrées d’air, par les coffres de volets roulants et aussi par les défauts d’étanchéité des parois. Une bonne isolation acoustique suppose une bonne étanchéité à l’air.<br>
        Cependant, le renouvellement de l’air du logement est indispensable. Il faut donc laisser passer l’air en limitant le passage du bruit, en installant par exemple un vitrage isolant acoustique ou un double-fenêtre.
        <br>Pour des travaux complexes ou délicats, il est utile de faire établir un diagnostic par un acousticien avant de démarrer les travaux. En effet, si en matière d’isolation thermique, les professionnels sont souvent formés à la recherche de solutions globales, seul un acousticien peut réaliser un bilan et proposer des solutions adéquates aux gros défauts acoustiques d’un bâtiment.<br>
               </li></ul></p>
        <p>Vous pouvez consulter les ouvrages du CIDB disponibles gratuitement et téléchargeables sur <a href="http://www.bruit.fr/" target="_blank">www.bruit.fr</a></p>

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
