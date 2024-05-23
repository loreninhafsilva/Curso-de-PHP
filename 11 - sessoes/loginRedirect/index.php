<?php 
  if ($_SERVER["REQUEST_METHOD"] === 'GET') { 
    // Inicializa a variável $pagina com uma string vazia
    $pagina = "";
  } 
  else if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $pagina = "";
    
    // Obtém os valores dos campos de login e senha do formulário
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ((trim($login) != "") && (trim($senha) != "")) {

      if (($login == "professor") && ($senha == "1234")) {
        // Inicia uma sessão
        session_start();
        // Armazena o login na variável de sessão
        $_SESSION["login"] = $login;
        // Redireciona para a página professor.php
        header('Location: professor.php');
      } 
      else if (($login == "aluno") && ($senha == "5678")) {
        // Inicia uma sessão
        session_start();
        // Armazena o login na variável de sessão
        $_SESSION["login"] = $login;
        // Redireciona para a página aluno.php
        header('Location: aluno.php');
      } 
      // Se as credenciais não corresponderem a nenhuma das verificações anteriores
      else {
        // Define uma mensagem de erro
        $msg = "Login e/ou senha inválido(s)!";
        // Redireciona para a página erro.php passando a mensagem de erro como parâmetro na URL
        header('Location: erro.php?msg='.$msg);
      }
    } 
    else {
      echo "Informe seu login e sua senha";
    }
  }
?>
<html>
  <head>
      <title>DINFO App</title>
  </head>

  <body>

    <h1 align="center">Sistema Acadêmico</h1>
    <hr>

    <form method="post">
        
        Login:<br>
        <input type="text" name="login" required>

        <br><br>

        Senha:<br>
        <input type="password" name="senha" required>
        <input type="submit" value="Ok">
     </form>        
        
     <hr>        
        
  </body>
</html>