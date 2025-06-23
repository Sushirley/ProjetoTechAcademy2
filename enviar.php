<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $destinatario = "tikvictoor@gmail.com";
    $assunto = "Novo Agendamento de $nome";
    
    $corpo = "Você recebeu um novo agendamento:\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Data: $data\n";
    $corpo .= "Hora: $hora\n";
    $corpo .= "Mensagem: $mensagem\n";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n";

    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "<script>alert('Agendamento enviado com sucesso!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar o agendamento. Tente novamente.'); history.back();</script>";
    }
}
?>
