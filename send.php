<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $userEmail = $_POST['email'];
    $userName = $_POST['nom'] . ' ' . $_POST['prenom'];

    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        try {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username = "your_email";
            $mail->Password = 'your_password';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
            $mail->Port       = 465;

            $mail->setFrom($userEmail, $userEmail); 
            $mail->addAddress('your_email'); 
            $mail->addReplyTo($userEmail, $userName); 
            
            $mail->isHTML(true);
            $mail->Subject = '(choose your subject)';

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $studentNumber = $_POST['studentNumber'];
            $message = $_POST['message'];

            $mailContent = "<p>Nom: $nom</p>";
            $mailContent .= "<p>Prénom: $prenom</p>";
            $mailContent .= "<p>Numéro d'étudiant: $studentNumber</p>";
            $mailContent .= "<p>Message: $message</p>";

            $mail->Body = $mailContent;

            $mail->send();

            echo "<script>
                    alert('Email envoyé');
                    document.location.href = 'index.php';
                  </script>";
        } catch (Exception $e) {
            echo $mail->ErrorInfo;
        }
    } else {
        echo "Adresse e-mail invalide.";
    }
}
?>