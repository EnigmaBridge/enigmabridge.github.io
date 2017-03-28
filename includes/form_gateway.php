<?php	
	if(empty($_POST['space_admin_email_gw']) && strlen($_POST['space_admin_email_gw']) == 0)
	{
		return false;
	}
	
	$space_admin_email_gw = $_POST['space_admin_email_gw'];
	$gatewaylocation = $_POST['gatewaylocation'];
	$gatewaymessage = $_POST['gatewaymessage'];
	$gatewaysize = $_POST['gatewaysize'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Request for Private Space";
	$email_body = "You have received a new message. \n\n".
				  "Space_Admin_Email_Gw: $space_admin_email_gw \nGatewaylocation: $gatewaylocation \nGatewaymessage: $gatewaymessage \nGatewaysize: $gatewaysize \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: privatespace@enigmabridge.com\n";
	$headers .= "Reply-To: $space_admin_email_gw";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
