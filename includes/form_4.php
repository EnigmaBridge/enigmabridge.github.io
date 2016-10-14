<?php	
	if(empty($_POST['email4']) && strlen($_POST['email4']) == 0)
	{
		return false;
	}
	
	$email4 = $_POST['email4'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from EB-webSite.";
	$email_body = "You have received a new message. \n\n".
				  "Email4: $email4 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email4";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>