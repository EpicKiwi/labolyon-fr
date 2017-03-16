<?php
mb_internal_encoding("UTF-8");
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Completer tous les champs";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'contact@labolyon.fr';
$email_subject = "[Site] Contact de :  $name";
$email_body = "Vous avez recu un message depuis le formulaire du site.\n\n"."Voici les details :\n\nNom : $name\n\nEmail : $email_address\n\nTelephone : $phone\n\nMessage :\n$message";
$headers = "From: noreply@labolyon.fr\n";
$headers .= "Reply-To: $email_address";	
$headers .= "Date: ".date("r");	
mail($to,$email_subject,$email_body,$headers);
return true;
?>
