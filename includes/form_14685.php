<?php	
	if(empty($_POST['name_14685']) && strlen($_POST['name_14685']) == 0 || empty($_POST['email_14685']) && strlen($_POST['email_14685']) == 0 || empty($_POST['message_14685']) && strlen($_POST['message_14685']) == 0)
	{
		return false;
	}
	
	$name_14685 = $_POST['name_14685'];
	$email_14685 = $_POST['email_14685'];
	$message_14685 = $_POST['message_14685'];
	
	$to = 'contact@anthonychambet.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Formulaire siteweb";
	$email_body = "You have received a new message. \n\n".
				  "Name_14685: $name_14685 \nEmail_14685: $email_14685 \nMessage_14685: $message_14685 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_14685";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>