<?php
    session_start();
    $login = $_SESSION["login"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Professor</title>
</head>

<body>
	<a href="">Controle de Frequência</a> |
	<a href="">Controle de Notas</a> |
	<hr>

	<h1>Professor - login: <?=$login?></h1>

	<h2>Recados</h2>

	<p>Caros professores, favor lançar as datas e pesos das avaliações do sistema Sophia ate 31/03/2024</p>	
</body>
</html>