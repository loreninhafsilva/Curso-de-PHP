<?php
//sempre todas as letras maiúsculas

//valor guardado no navegador, depois podendo ser resgatado em qualquer parte do sistema; tem prazo de validade; guarda qualquer tipo de dados 
$name = "Lorena";
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';

//ela é guardada no navegador, mas não é guardada o valor da sessão
$_SESSION;

//pegar um arquivo enviado de um formulário
$_FILES;

//pega da URL as variáveis passadas pelo método GET
$_GET;

//pega do header as variáveis passadas pelo método POST
$_POST;

//variáveis de URL; pega tanto o GET quanto o POST
$_REQUEST;

//é um array contendo informação como headers, caminhos, e outras informações do script. As informações nesse array são criadas pelo servidor web específico, e portanto não há garantias que sempre existirá as mesmas informações.
$_SERVER;