<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = strip_tags(trim($_POST["mensagem"]));

    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "<script>alert('Por favor, preencha todos os campos.'); window.history.back();</script>";
        exit;
    }

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'louiseneves87@gmail.com'; // Seu e-mail Gmail
        $mail->Password   = 'lzka cimw rzqn tuin'; // Senha de app
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Remetente e destinatário
        $mail->setFrom($mail->Username, 'Portfólio - Louise');
        $mail->addAddress('louiseneves87@gmail.com');

        // Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Nova mensagem do portfólio';
        $mail->Body    = "<b>Nome:</b> $nome<br><b>Email:</b> $email<br><b>Mensagem:</b><br>".nl2br($mensagem);

        $mail->send();
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Erro ao enviar: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
?>
