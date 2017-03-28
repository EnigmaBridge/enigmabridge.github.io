<?php	
	if(empty($_POST['space_admin_email_off']) && strlen($_POST['space_admin_email_off']) == 0 || empty($_POST['officemessage']) && strlen($_POST['officemessage']) == 0)
	{
		return false;
	}
	
	$space_admin_email_off = $_POST['space_admin_email_off'];
	$officelocation = $_POST['officelocation'];
	$officemessage = $_POST['officemessage'];
	$officesize = $_POST['officesize'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Request for Private Space";
	$email_body = "You have received a new message. \n\n".
				  "Space_Admin_Email_Off: $space_admin_email_off \nOfficelocation: $officelocation \nOfficemessage: $officemessage \nOfficesize: $officesize \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: privatespace@enigmabridge.com\n";
	$headers .= "Reply-To: $space_admin_email_off";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
