<?php	
	if(empty($_POST['space_admin_email_gw']) && strlen($_POST['space_admin_email_gw']) == 0)
	{
		return false;
	}
	
	$gatewaysize = $_POST['gatewaysize'];
	$gatewaylocation = $_POST['gatewaylocation'];
	$space_admin_email_gw = $_POST['space_admin_email_gw'];
	$gatewaymessage = $_POST['gatewaymessage'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Request for Private Space";
	$email_body = "You have received a new message. \n\n".
				  "Gatewaysize: $gatewaysize \nGatewaylocation: $gatewaylocation \nSpace_Admin_Email_Gw: $space_admin_email_gw \nGatewaymessage: $gatewaymessage \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: privatespace@enigmabridge.com\n";
	$headers .= "Reply-To: $space_admin_email_gw";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
