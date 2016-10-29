<?php	
	if(empty($_POST['name5']) && strlen($_POST['name5']) == 0 || empty($_POST['email5']) && strlen($_POST['email5']) == 0 || empty($_POST['message5']) && strlen($_POST['message5']) == 0)
	{
		return false;
	}
	
	$name5 = $_POST['name5'];
	$email5 = $_POST['email5'];
	$message5 = $_POST['message5'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from EB-webSite.";
	$email_body = "You have received a new message. \n\n".
				  "Name5: $name5 \nEmail5: $email5 \nMessage5: $message5 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email5";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>