<?php

  // Destinatário
  $para = "lestervgt@gmail.com.br";

  // Assunto do e-mail
  $assunto = "Contato do site";

  // Campos do formulário de contato
  $nome = $_POST[`Nome`];
  $email = $_POST[`Email`];
  $telefone = $_POST[`Telefone`];
  $mensagem = $_POST[`Mensagem`];

  // Monta o corpo da mensagem com os campos
  $corpo = "Nome: $nome <br>Nome: $nome <br>";
  $corpo .= "E-mail: $email <br>Mensagem: $mensagem";

  // Cabeçalho do e-mail
  $header = "From: $nome <$para> Reply-to: $email ";
  $header .= "Content-Type: text/html; charset=iso-8859-1 ";

  mail($para, $assunto, $corpo, $header);

  $msg = "Sua mensagem foi enviada com sucesso.";

  // Mostra a mensagem acima e redireciona para index.html
  echo "<script>location.href=`index.php`; alert(`$msg`);</script>";

?>