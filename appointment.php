<?php

$mail_info = "info@srisaibalajiastrocentre.in";

   if (!empty($_POST["email"])) {

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $date = $_POST['date'];
$city = $_POST['city'];
$information = $_POST['information'];

if(is_null($email)){
$email = $mail_info;
}
else{
$email = $_POST['email'];
}


           $to = $mail_info;
$subject = 'srisaibalajiastrocenter ';
$rlysubject = 'srisaibalajiastrocenter';

$headers = "From: info@srisaibalajiastrocentre.in".$mail_info."\r\n";
$headers .= "Reply-To: info@srisaibalajiastrocentre.in ". $email . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
           $message = "";
$message .= '<html><body><table width="100%" cellpadding="5" cellspacing="0" border="0" style="font-size:14px;font-family:arial;">';

$message .= '<tr><td  width="30%">First Name :</td><td> '.$fname.' </td></tr>';
$message .= '<tr><td  width="30%">Last Name :</td><td> '.$lname.' </td></tr>';
$message .= '<tr><td  width="30%">Email :</td><td> '.$email.' </td></tr>';
$message .= '<tr><td  width="30%">Date of Booking :</td><td>'.$date.'</td></tr>';
$message .= '<tr><td  width="30%">City:</td><td>'.$city.'</td></tr>';
$message .= '<tr><td  width="30%">Message:</td><td>'.$information.'</td></tr>';


           $rlymessage = "";
$rlymessage .= '<html><body><table width="100%" cellpadding="5" cellspacing="0" border="0" style="font-size:14px;font-family: arial;"><tr><td colspan="2" align="center">seo expert</td></tr>';
$rlymessage .= '<tr><td>Hi '.$paname.' ,</td></tr>';
$rlymessage .= '<tr><td>Thank You for c<br/>We have received your enquiry. Our team will contact you soon. </br> </br> Thanks </br>Admin</br> info@weblogicks.com</br></br> </td></tr></table></body></html>';

if (mail($to, $subject, $message, $headers)){
                header('Refresh: 0; thanks.html');
                exit;
            }else {
               header('Location: /?message=There was a problem sending the email.');
           }

}

 

?>