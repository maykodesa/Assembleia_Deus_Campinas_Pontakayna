<?php

// RECEBENDO DADOS DO FORM
$nome   = $_POST['nome'];
$pedido = $_POST['pedido'];

// CONFIGURAÇÕES DO EMAIL
$destinatario = "maykodesa@hotmail.com";  // <-- coloque seu e-mail aqui
$assunto      = "Novo Pedido de Oração - $nome";

$mensagem = "Nome: $nome\n\n";
$mensagem .= "Pedido de oração:\n$pedido\n";

// CABEÇALHOS
$cabecalhos  = "From: https://srvsave936.br-atacadao.corp/Igreja/index.html\r\n";
$cabecalhos .= "Reply-To: $destinatario\r\n";
$cabecalhos .= "X-Mailer: PHP/" . phpversion();

// ENVIAR E-MAIL
if (mail($destinatario, $assunto, $mensagem, $cabecalhos)) {
    echo "Pedido enviado com sucesso!";
} else {
    echo "Erro ao enviar o pedido.";
}
?>
