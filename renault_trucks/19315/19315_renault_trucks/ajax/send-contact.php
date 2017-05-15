
<?php
$to      = 'patrick@stream-ltd.com';
$subject = 'Contact Form from Proudprofessionals Website';

$name = $_POST["contactname"];
$email_from = $_POST["contactemail"];
$company = $_POST["contactcompany"];
$tel = $_POST["contacttel"];
$contactmessage = $_POST["contactmessage"];
	
	
$message = "Name: ". $name  . "\r\n" . "Company: ". $company  . "\r\n" . "Telephone: ". $tel  . "\r\n" . "Email: ". $email_from  . "\r\n" . "Message: " . $contactmessage;
$headers = 'From: noreply@proudprofessionals.co.uk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
