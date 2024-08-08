<?php
$field_name = $_POST['name'];
$field_number = $_POST['number'];
$field_message = $_POST['message'];

$mail_to = 'kesavan8384@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Number: '.$field_number."\n";
$body_message .= 'Message: '.$field_message;

// Changed from $field_email to $field_number
$headers = 'From: '.$field_number."\r\n";
$headers .= 'Reply-To: '.$field_number."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>
