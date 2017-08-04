<?php	
	if(empty($_POST['news_name']) && strlen($_POST['news_name']) == 0 || empty($_POST['news_email']) && strlen($_POST['news_email']) == 0 || empty($_POST['news_message']) && strlen($_POST['news_message']) == 0)
	{
		return false;
	}
	
	$news_name = $_POST['news_name'];
	$news_email = $_POST['news_email'];
	$news_message = $_POST['news_message'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from enigmabridge.com.";
	$email_body = "You have received a new message. \n\n".
				  "News_Name: $news_name \nNews_Email: $news_email \nNews_Message: $news_message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: subscribe@enigmabridge.com\n";
	$headers .= "Reply-To: $news_email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>