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

<body>
	<?php include("nav.php"); ?>

	<ul class="breadcrumb" style="margin-top:20px;">
		<li><a href="index.php">Accueil</a>
		</li>
		<li class="active">Contact</li>
	</ul>
	<?php
	date_default_timezone_set( 'Europe/Paris' );
	if ( isset( $_POST[ 'email' ] ) ) {

		// EDIT THE 2 LINES BELOW AS REQUIRED
		//mail('f.viteau@areve83.fr',$email_subject,$comments);
		//$email_to = "f.viteau@areve83.fr";
		//$email_subject = "Demande de renseignements";

		function died( $error ) {
			// your error code can go here
			echo "Nous sommes désolés mais une ou plusieurs erreurs apparaissent dans le document que vous envoyez. ";
			echo "Liste des erreurs.<br /><br />";
			echo $error . "<br /><br />";
			echo "Merci de remplir et renvoyer ce formulaire.<br /><br />";
			?>
	<a href="contact1.php">Retour</a>
	<?php
	die();
	}


	// validation expected data exists
	if ( !isset( $_POST[ 'first_name' ] ) ||
		!isset( $_POST[ 'last_name' ] ) ||
		!isset( $_POST[ 'ville' ] ) ||
		!isset( $_POST[ 'email' ] ) ||
		!isset( $_POST[ 'telephone' ] ) ||
		!isset( $_POST[ 'comments' ] ) ) {
		died( 'Nous sommes désolés mais une ou plusieurs erreurs apparaissent dans le document que vous envoyez.' );
	}

	$first_name = $_POST[ 'first_name' ]; // required
	$last_name = $_POST[ 'last_name' ]; // required
	$ville = $_POST[ 'ville' ];
	$email_from = $_POST[ 'email' ]; // required
	$telephone = $_POST[ 'telephone' ]; // not required
	$comments = $_POST[ 'comments' ]; // required

	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if ( !preg_match( $email_exp, $email_from ) ) {
		$error_message .= "L'adresse E-Mail ne semble pas valide.<br />";
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if ( !preg_match( $string_exp, $first_name ) ) {
		$error_message .= 'Le prénom ne semble pas valide.<br />';
	}

	if ( !preg_match( $string_exp, $last_name ) ) {
		$error_message .= 'Le nom ne semble pas valide.<br />';
	}

	//if(!preg_match($string_exp,$ville)) {
	//  $error_message .= 'Le nom de la ville ne semble pas valide.<br />';
	// }

	if ( strlen( $comments ) < 2 ) {
		$error_message .= 'Le message ne semble pas valide.<br />';
	}

	if ( strlen( $error_message ) > 0 ) {
		died( $error_message );
	}

	$email_message = "Form details below.\n\n";


	function clean_string( $string ) {
		$bad = array( "content-type", "bcc:", "to:", "cc:", "href" );
		return str_replace( $bad, "", $string );
	}

	$email_message .= "Prénom : " . clean_string( $first_name ) . "\n";
	$email_message .= "Nom : " . clean_string( $last_name ) . "\n";
	$email_message .= "Ville : " . clean_string( $ville ) . "\n";
	$email_message .= "Email : " . clean_string( $email_from ) . "\n";
	$email_message .= "Telephone : " . clean_string( $telephone ) . "\n";
	$email_message .= "Message : " . clean_string( $comments ) . "\n";

	// create email headers
	//$headers = 'de: '.$email_from."\r\n".
	//'Reply-To: '.$email_from."\r\n" .
	//'X-Mailer: PHP/' . phpversion();
	//@mail($email_to, $email_subject, $email_message, $headers);  

	$to = 'areve83@gmail.com';
	$subject = 'Demande de renseignements';
	$message = $email_message;
	$headers = 'From: contact@areve83.fr' . "\r\n" .
	'Reply-To: contact@areve83.fr' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	mail( $to, $subject, $message, $headers );
	?>

	<!-- include your own success html here -->

	<p style="text-align: center">Merci de votre envoi. Nous reviendrons vers vous très rapidement.</p>

	<?php

	}
	?>

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