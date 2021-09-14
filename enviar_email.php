<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

// Pegando as informações do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$status = null;

try {
    // Configurações do Servidor que enviará os e-mails (GMail)
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'prof.marcocarvalho.web@gmail.com'; // Seu nome de usuário do gmail
    $mail->Password   = 'kgocxzvplaoazltt';                 // Senha gerada na etapa anterior
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Conta que receberá os emails enviados pelo formulário (pode ser a mesma que envia)
    $mail->setFrom($email, $nome);
    $mail->addAddress('marco.carvalho9@etec.sp.gov.br', 'Marco Carvalho');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Formulário de contato - ' . $email;
    $mail->Body    = $mensagem;

    $mail->send();
    echo 'Mensagem Enviada';
} catch (Exception $e) {
    echo "Mensagem não pode ser enviada. Mailer Error: {$mail->ErrorInfo}";
}


