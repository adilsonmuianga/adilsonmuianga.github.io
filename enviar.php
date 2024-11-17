<!-- enviar_email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $para = "20230277@isctem.ac.mz";
    $assunto = "Novo formulário de contato";
    $headers = "From: $email";

    mail($para, $assunto, $mensagem, $headers);
    echo "E-mail enviado com sucesso!";
}
?>