<?php	
	if(empty($_POST['space_admin_email_off']) && strlen($_POST['space_admin_email_off']) == 0 || empty($_POST['officemessage']) && strlen($_POST['officemessage']) == 0)
	{
		return false;
	}
	
	$officesize = $_POST['officesize'];
	$officelocation = $_POST['officelocation'];
	$space_admin_email_off = $_POST['space_admin_email_off'];
	$officemessage = $_POST['officemessage'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Request for Private Space";
	$email_body = "You have received a new message. \n\n".
				  "Officesize: $officesize \nOfficelocation: $officelocation \nSpace_Admin_Email_Off: $space_admin_email_off \nOfficemessage: $officemessage \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: privatespace@enigmabridge.com\n";
	$headers .= "Reply-To: $space_admin_email_off";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
