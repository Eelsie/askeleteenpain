<?php

require("phpmailer/class.phpmailer.php");

$errors = '';
$myemail = '';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Virhe: t&auml;yt&auml; kaikki kent&auml;t\n";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$age = $_POST['age'];
$town = $_POST['town'];  
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Virhe: s&auml;hk&ouml;posti ei kelpaa\n";
}

if( empty($errors))
{

$mail = new PHPMailer();
$mail->CharSet = "utf8";
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "mailout.one.com"; // SMTP server
$mail->SMTPAuth = false;

$mail->SetFrom('mitaverkosto@askeleteenpain.fi', 'Mitä-verkosto');
//$mail->From     = "'Mitä-verkosto' <mitaverkosto@askeleteenpain.fi>";
$mail->AddAddress("$email_address");
$mail->AddAddress('mitaverkosto@askeleteenpain.fi');

$mail->Subject  = "Viesti, lähettäjä: $name, $age, $town";
$mail->Body     = "Viesti otettu vastaan:\n"
             	  ."Nimi: $name \nSähköposti: $email_address \nIkä: $age \nPaikkakunta: $town \nViesti:\n $message";
$mail->WordWrap = 50;


if(!$mail->Send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  header('Location: http://askeleteenpain.fi/kiitos.php');
}
}
?>