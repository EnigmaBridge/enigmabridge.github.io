<?php	
	if(empty($_POST['space_admin_email']) && strlen($_POST['space_admin_email']) == 0)
	{
		return false;
	}
	
	$space_admin_email = $_POST['space_admin_email'];
	$region = $_POST['region'];
	$type = $_POST['type'];
	$size = $_POST['size'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Request for Private Space";
	$email_body = "You have received a new message. \n\n".
				  "Space_Admin_Email: $space_admin_email \nRegion: $region \nType: $type \nSize: $size \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: privatespace@enigmabridge.com\n";
	$headers .= "Reply-To: $space_admin_email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
