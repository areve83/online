<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AREVE Contact</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/contact.css">

	<link href="fonts/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

<?php include("nav.php"); ?>

<body>

	<div class="container">
		<form id="contact" name="contactform" method="post" action="contact2.php">
			<h3 class="txt_titre">Contactez-nous</h3>
			<h4>Merci de remplir le questionnaire afin que nous puissions prendre en compte votre demande.</h4>
			<fieldset>
				<input placeholder="Votre nom" type="text" name="first_name" required>
			</fieldset>
			<fieldset>
				<input placeholder="Votre prénom" type="text" name="last_name" required>
			</fieldset>
			<fieldset>
				<input placeholder="Votre ville" type="text" name="ville" required>
			</fieldset>
			<fieldset>
				<input placeholder="Votre email" type="text" name="email" required>
			</fieldset>
			<fieldset>
				<input placeholder="Votre téléphone" type="text" name="telephone">
			</fieldset>
			<fieldset>
				<textarea placeholder="Votre message" name="comments" maxlength="1000" required></textarea>
			</fieldset>
			<fieldset>
				<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
			</fieldset>
		</form>
	</div>
</body>

<footer class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p>Copyright © areve. All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>