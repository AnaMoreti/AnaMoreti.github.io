<?php
$nome = addslashes($_POST('nome'));
$email = addslashes($_POST('email'));
$celular = addslashes($_POST('celular'));
$mensagem = addslashes($_POST('mensagem'));

$para = "anamello825@gmail.com";
$assunto = "CONTATO - Portfólio";

$corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem;
         
$cabeca = "From anamello825@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Erro ao enviar email!")
}


?>