<?php require_once (bace_url('action/vendor/autoload.php')); //PHPMailer Object 

$mail = new PHPMailer\PHPMailer\PHPMailer();
///$mail->isSMTP;

$mail->Host='mail.mazinigroup.com ';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';



$emails='contact@mazinigroup.com';

$mail->Username='contact@mazinigroup.com';
$mail->Password='';


$mail->setFrom('order@mazinigroup.com','MaziniGroup');
$mail->addAddress($emails);
$mail->addReplyTo($email);


$mail->isHTML(true);

$mail->Subject='Mazini Tanzanian  Web Order';
$mail->Body="<b>Email :</b> $email <br><b>Phone :</b>$phone <br>
<br><b>Order:</b> $comments";



?>