<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Chrome -->
        <title>AREVE - Actualités</title>
        <meta name="description" content="Service public d'accompagnement pour les propriétaires est-varois de maisons individuelles et les copropriétés dans leurs projets de travaux de rénovation, d'isolation ou de chauffage. Elle apporte conseils techniques et financiers gratuits et neutres."/>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

           
        </style>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78353130-1"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script>
            $(function() {
                $(".video").click(function () {
                    var theModal = $(this).data("target"),
                        videoSRC = $(this).attr("data-video"),
                        videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
                    $(theModal + ' iframe').attr('src', videoSRCauto);
                    $(theModal + ' button.close').click(function () {
                        $(theModal + ' iframe').attr('src', videoSRC);
                    });
                });
            });
        </script>
    </head>


    <body>
        <?php include ("nav.php"); ?>

        <div class="container">
            <h1 class="header-1">Actualités</h1>
        </div>
        <hr>
        <div class="container">
            <?php include './BDD/all_listing.php' ?>
        </div>

        <footer>
            <div class="container"  style="border-top: solid 1px black;margin-top: 15px">
                <div class="row">
                    <p class="pmax" style="text-align: center">Pour nous contacter : 0 808 800 083<br>Mail : <a href="mailto:contact@areve83.fr" style="text-decoration: none;" target="_blank">contact@areve83.fr</a></p>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>