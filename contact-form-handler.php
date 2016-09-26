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
	$to = $myemail; 
	$email_subject = "Viesti, lähettäjä: $name, $age, $town";
	$email_body = "Viesti otettu vastaan:\n"
	."Nimi: $name \nSähköposti: $email_address \nIkä: $age \nPaikkakunta: $town \nViesti:\n $message";


$headers = 'From: mitaverkosto@askeleteenpain.fi' . "\r\n" . 'Reply-To: mitaverkosto@askeleteenpain.fi' . "\r\n";

	mail($to,$email_subject,$email_body,$headers);
	mail($email_address,$email_subject,$email_body,$headers);

	//redirect to the 'thank you' page
	header('Location: http://askeleteenpain.fi/kiitos.php');
} 
?>

<!-- This page is displayed only if there is some error -->

<?php include 'header.php'; ?>

  <div id="wrapper">
    <!-- INFO -->
    <div class="container-fluid info box">
      <div class="row">
        <div class="col-xs-12">
          <p><?php
          echo nl2br($to) . "\r\n";
          echo nl2br($email_subject) . "\r\n";
          echo nl2br($email_body) . "\r\n";
          echo nl2br($headers) . "\r\n";
          echo nl2br($errors) . "\r\n";
          ?></p>
          <br/><FORM><INPUT Type="button" class="btn btn-default" style="margin: 0 0 7px 0; height: 30px;" VALUE="Takaisin" onClick="history.go(-1);return true;"></FORM>
        </div>
      </div>
    </div>
  </div>

</body>
</html>