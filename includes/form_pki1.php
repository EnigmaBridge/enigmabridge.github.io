<?php	
	if(empty($_POST['name_pki1']) && strlen($_POST['name_pki1']) == 0 || empty($_POST['country_pki1']) && strlen($_POST['country_pki1']) == 0 || empty($_POST['email_pki1']) && strlen($_POST['email_pki1']) == 0)
	{
		return false;
	}
	
	$name_pki1 = $_POST['name_pki1'];
	$country_pki1 = $_POST['country_pki1'];
	$email_pki1 = $_POST['email_pki1'];
	
	$to = 'support@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from PKI1";
	$email_body = "You have received a new request for PKI1. \n\n".
				  "Name_Pki1: $name_pki1 \nCountry_Pki1: $country_pki1 \nEmail_Pki1: $email_pki1 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: $email_pki1\n";
	$headers .= "Reply-To: $email_pki1";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
