<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'bhumipatel1196@gmail.com';          // SMTP username
$mail->Password = 'iwant2bsuccessful'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('bhumipatel1196@gmail.com', 'Bhumi Patel');
$mail->addReplyTo('bhumipatel1196@gmail.com', 'Bhumi Patel');
$mail->addAddress('bhumipatel1196@gmail.com');   // Add a recipient

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>How to Send Email using PHP in Localhost by PrachiVankawala</h1>';
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>PrachiVankawala</b>this our advanture to show our company sir that it is possible to send mail using localhost </p>';

$mail->Subject = 'Email from Localhost by bhumi';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>