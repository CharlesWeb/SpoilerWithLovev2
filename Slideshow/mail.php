<?php
require_once 'vendor/autoload.php';

if(isset($_POST['submit'])){

  /*if($_POST['choixSerie'] == 'got'){
    $body = file_get_contents('');
  }elseif($_POST['choixSerie'] == 'twd'){
    $body = file_get_contents('');
  }else{
    $body = file_get_contents('');
  }*/

    $dest_mail = htmlspecialchars(trim($_POST['email']));

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
    $mail->Port = 465;                                    // Set the SMTP port
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nospoilwithlove@gmail.com';                // SMTP username
    $mail->Password = 'jorbencha';                  // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

    $mail->From = 'nospoilwithlove@gmail.com';
    $mail->FromName = 'Your From name';
    $mail->AddAddress($dest_mail);  // Add a recipient
                   // Name is optional

    $mail->IsHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Petit spoil d\'un ami';
    $mail->Body    = 'test';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->Send()) {
     header('Location: error.html');
     exit;
    }

    header('Location: success.html');

  }

?>
