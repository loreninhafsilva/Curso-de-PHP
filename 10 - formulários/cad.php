<?php
$nome = $_GET["nome"] ?? "sem nome";
$sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";

echo "<p>É um prazer te conhecer, $nome $sobrenome!</p>";
?>