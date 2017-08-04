<?php	
	if(empty($_POST['contact_name']) && strlen($_POST['contact_name']) == 0 || empty($_POST['contact_email']) && strlen($_POST['contact_email']) == 0 || empty($_POST['contact_message']) && strlen($_POST['contact_message']) == 0)
	{
		return false;
	}
	
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_message = $_POST['contact_message'];
	$subscriptionrequest = $_POST['subscriptionrequest'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from enigmabridge.com.";
	$email_body = "You have received a new message. \n\n".
				  "Contact_Name: $contact_name \nContact_Email: $contact_email \nContact_Message: $contact_message \nSubscriptionrequest: $subscriptionrequest \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: web-contact@enigmabridge.com\n";
	$headers .= "Reply-To: $contact_email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>