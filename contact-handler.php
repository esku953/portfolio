<?php
print "<pre>"; 
print_r($_POST); 

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'esubalew@kemahu.com';

	$email_subject = "Visitors Greetings";

	//$email_body = "User Name: $name.\n".
					//"User Email: $visitor_email.\n".
						//"User Message: $message.\n";

	$email_body = "Testing";

	$to = "scotchtour1@gmail.com";

	$headers = "From: $email_from\r\n";

	$headers .= "Reply-To: $visitor_email\r\n";

	mail($to, $email_subject,$email_body,$headers);

	header('Location: index.html');

	exit;
?>