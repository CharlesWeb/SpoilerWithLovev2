<?php
require_once 'vendor/autoload.php';

if(isset($_POST['submit'])){

  if($_POST['choixSerie'] == 'got'){
    $body = "got";
  }elseif($_POST['choixSerie'] == 'twd'){
    $body = "twd";
  }

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
    $mail->Body    = $body;
    $mail->AltBody = 'Tu viens de recevoir un spoil d\'un pote!  Malheuresement ta boite mail ne peut pas lire le message! Va faire un tour sur http://spoilwithlove.fr !';

    if(!$mail->Send()) {
     header('Location: error.html');
     exit;
    }
    header('Location: success.html');

  }

?>
