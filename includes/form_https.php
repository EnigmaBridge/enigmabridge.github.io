<?php	
	if(empty($_POST['https_name']) && strlen($_POST['https_name']) == 0 || empty($_POST['https_email']) && strlen($_POST['https_email']) == 0)
	{
		return false;
	}
	
	$https_name = $_POST['https_name'];
	$https_email = $_POST['https_email'];
	$https_message = $_POST['https_message'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "HTTPS analysis request";
	$email_body = "You have received a new message. \n\n".
				  "Https_Name: $https_name \nHttps_Email: $https_email \nHttps_Message: $https_message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: rsa@enigmabridge.com\n";
	$headers .= "Reply-To: $https_email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
