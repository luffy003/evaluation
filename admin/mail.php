<?php 
require("admin/PHPMailer-master/PHPMailerAutoload.php");

$mail = new PHPMailer();
$message= "Thank you for registering in CHMSC BSIS/IM Alumni Tracer.<br>
Your username is: $username <br>
Password: $password <br>
You may now login using the following link http://faculty.chmsc.edu.ph";

// set mailer to use SMTP
//$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = gethostbyname("smtp.gmail.com");  // specify main and backup server

$mail->SMTPAuth = true;     // turn on SMTP authentication

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = "bsis.alumni@chmsc.edu.ph";  // SMTP username
$mail->Password = "4952237!link"; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
//$mail->From = "bsischmsc.gmail.com";
$mail->SetFrom("bsis.alumni@chmsc.edu.ph", "CHMSC BSIS Talisay");
// below we want to set the email address we will be sending our email to.
$mail->AddAddress("$email");

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "BSIS Alumni Tracer Account Details";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

?>