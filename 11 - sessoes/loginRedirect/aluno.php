<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aluno</title>
</head>
<body>

<?php
// Verifica se a variável de sessão "login" está definida
if (!isset($_SESSION["login"])) {
  // Define uma mensagem de erro indicando que o usuário precisa fazer login para acessar a página
  $msg = 'Para acessar essa página você deve efetuar o <a href="index.php">Login.</a>';
  // Redireciona o usuário para a página de erro com a mensagem de erro passada como parâmetro na URL
  header('Location: erro.php?msg='.$msg);  
} 
// Se a variável de sessão "login" estiver definida
else {
  include("contentAluno.html");
}
?>


</body>
</html>