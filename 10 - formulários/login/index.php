<?php 
  if ($_SERVER["REQUEST_METHOD"] === 'GET') { 

    $pagina = "";

  } else if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        $pagina = "";

        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if ( (trim($login) != "") && (trim($senha) != "") ) {

            if ( ($login == "professor") && ($senha == "1234") ) {
                $pagina = "professor.html";

            } else if ( ($login == "aluno") && ($senha == "5678") ) {
                $pagina = "aluno.html";

            } else {
                $pagina = "erro.html";
            }
            
        } else {
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

     <?php
       if ($pagina != "") {
          include $pagina;
       }          
      ?>           
        
  </body>
</html>