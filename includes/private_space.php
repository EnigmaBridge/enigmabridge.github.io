<?php	
	if(empty($_POST['email6']) && strlen($_POST['email6']) == 0)
	{
		return false;
	}
	
	$email6 = $_POST['email6'];
	$region = $_POST['region'];
	
	$to = 'support@enigmabridge.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from enigmabridge.com.";
	$email_body = "You have received a new message. \n\n".
				  "Email6: $email6 \nRegion: $region \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: privatespace@enigmabridge.com\n";
	$headers .= "Reply-To: $email6";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>