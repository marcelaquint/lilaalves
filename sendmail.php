<?php 
	$ToEmail = 'contato@lilaalves.com'; 
	$EmailSubject = "[SITE LILAALVES.COM] ".$_POST["subject"]."\r\n"; 
	$mailheader = "From: ".$_POST["email"]."\r\n"; 
	$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$MESSAGE_BODY = "Nome: ".$_POST["name"]."<br>"; 
	$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
	$MESSAGE_BODY .= "Message: ".$_POST["message"]."<br>"; 
		mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
		header( "Location: http://lilaalves.com/feedback.html" );
?>