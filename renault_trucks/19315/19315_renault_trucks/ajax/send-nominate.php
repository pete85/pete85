
<?php
$to      = 'patrick@stream-ltd.com';
$subject = 'Nomination from Proudprofessionals Website';

$nom_name = $_POST["nominate_nominee_name"];
$nom_role = $_POST["nominate_nominee_role"];
$nom_dealership = $_POST["nominate_nominee_dealership"];
$reason = $_POST["nominate_reason"];
$yourname = $_POST["nominate_your_name"];
$yourcompany = $_POST["nominate_your_company"];
	
$message = "Nominee name: ". $nom_name  . "\r\n" . "Nominee role: ". $nom_role  . "\r\n" . "Nominee dealership: ". $nom_dealership  . "\r\n" . "Reason ". $reason  . "\r\n" . "Your Name: " . $yourname . "\r\n" . "Your Company: " . $yourcompany;
$headers = 'From: noreply@proudprofessionals.co.uk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
