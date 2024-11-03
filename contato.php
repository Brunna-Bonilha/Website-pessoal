<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $celular = $_POST['phone'];
    $mensagem = $_POST['message'];
    
    $to = "seuemail@dominio.com";
    $subject = "Contato pelo site";
    $body = "Nome: $nome\nE-mail: $email\nCelular: $celular\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>

