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
    <li class="active">Réglementation</li>
</ul>
    
<div class="container">
   <p>La ventilation est une obligation légale (arrêtés du 24 mars 1982 et du 28 octobre 1983) pour tous les logements postérieurs à 1982, collectifs ou individuels. Elle doit satisfaire aux exigences suivantes : l’aération doit être générale et permanente, la circulation d’air doit se faire depuis des entrées d’air situées dans les pièces principales jusqu’à des sorties, dans les pièces de service.<br/>Des débits réglementaires sont exigés (voir tableau ci-contre). La façon la plus sûre de les obtenir est d’installer une VMC. Il est en effet difficile de contrôler les débits d’air renouvelés par ventilation naturelle. Cependant, on estime que dans un logement neuf sur deux, les débits extraits ne correspondent pas aux exigences de la réglementation. </p>
   
    <div class="row">
        <div class="col-lg-12">
        <p>Débits à satisfaire <i>(cliquez pour agrandir) </i>: </p>
        <img class="img-responsive center-block" id="myImg" src="../img/debits_air_reglementation.png" width="300">
            <div id="myModal" class="modal">
            <span class="close">&times;</span>   
            <img class="modal-content" id="img1">
                <div id="caption"></div> 
            </div>  
        </div>
    </div>    
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
