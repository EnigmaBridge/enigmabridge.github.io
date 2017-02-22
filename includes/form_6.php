<?php	
	if(empty($_POST['name6']) && strlen($_POST['name6']) == 0 || empty($_POST['email6']) && strlen($_POST['email6']) == 0)
	{
		return false;
	}
	
	$name6 = $_POST['name6'];
	$email6 = $_POST['email6'];
	$message6 = $_POST['message6'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from enigmabridge.com.";
	$email_body = "You have received a new message. \n\n".
				  "Name6: $name6 \nEmail6: $email6 \nMessage6: $message6 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: rsa@enigmabridge.com\n";
	$headers .= "Reply-To: $email6";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>