<?php	
	if(empty($_POST['name_pki3']) && strlen($_POST['name_pki3']) == 0 || empty($_POST['email_pki3']) && strlen($_POST['email_pki3']) == 0)
	{
		return false;
	}
	
	$name_pki3 = $_POST['name_pki3'];
	$email_pki3 = $_POST['email_pki3'];
	
	$to = 'support@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from PKI3";
	$email_body = "You have received a new message. \n\n".
				  "Name_Pki3: $name_pki3 \nEmail_Pki3: $email_pki3 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: $email_pki3\n";
	$headers .= "Reply-To: $email_pki3";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
