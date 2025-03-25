<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer_master/src/Exception.php';
require './PHPMailer_master/src/PHPMailer.php';
require './PHPMailer_master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $mail = new PHPMailer(true);

    try {
        // Config serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '////';
        $mail->Password = '/////'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur et destinataire
        $mail->setFrom('your_email@gmail.com', 'Website Contact Form');
        $mail->addReplyTo($email, $name); 
        $mail->addAddress('diseursmat@gmail.com');

        // Contenu du mail
        $mail->isHTML(false);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body    = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message\n";

        $mail->send();
        echo "Email envoyé avec succès.";
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'email : {$mail->ErrorInfo}";
    }
} else {
    echo "Requête invalide.";
}
?>
