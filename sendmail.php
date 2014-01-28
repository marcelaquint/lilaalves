<?php
	$toemail = 'contato@lilaalves.com';  
	$emailsubject = "SITE: ".$_POST["subject"]."\r\n"; 
	$mailheader = "From: lilaalves.com <naoresponda@lilaalves.com>\r\n"; 
	$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
	$mailheader .= "Content-type: text/html; charset=utf-8\r\n"; 	
	$messagebody = "Nome: ".$_POST["myname"]."<br>"; 
	$messagebody .= "Email: ".$_POST["email"]."<br>"; 
	$messagebody .= "Mensagem: ".$_POST["message"]."<br>"; 
		mail($toemail, $emailsubject, $messagebody, $mailheader) or die ("Failure");
		header( "Location: http://lilaalves.com/feedback.html" );
?>


