<?php
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$name = $lastname. " " .$firstname;
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'luminousfish96@gmail.com';
	$email_subject = "MyWebsite FeedBack";
	$email_body = "Name: $name.\n".
					"Visitor Email: $visitor_email.\n".
					"Message: $message.\n";

	$to = "ejalonibudamilola96@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";

	$sendmail = mail($to, $email_subject, $email_body, $headers);

	if($sendmail){
		echo "Thank you, Your message has been sent.";
		echo $to ." ". $email_subject ." ". $headers;

	}
	else{
		echo "Your message was not successfully sent, please try sending again";	
	}

?>
