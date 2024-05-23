<?php

    if ($_SERVER["REQUEST_METHOD"] === 'GET') {

        if (!isset($_COOKIE["qtd"])) {
            $qtd = 0;
        } else {
            $qtd = $_COOKIE["qtd"];
        }
    
    }    
    else if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        if (!isset($_COOKIE["qtd"])) {
            $qtd = 1;
        } else {
            $qtd = $_COOKIE["qtd"]+1;
        }    

        setcookie("qtd", $qtd, time()+3600, "/");  //expira em 1 hora
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <style type="text/css">
        #produto {          
          border: 1px black solid;
          width: 150px;
          height: auto;
          padding-top: 10px;      
          padding-bottom: 10px;            
          display: flex;
          flex-direction: column;
          align-items: center;
        }       

        #qtd {
            background-color: red;
            color: white;
            font-weight: bold;
            font-size: 12px;
            border-radius: 10px;
            padding: 3px; 
            vertical-align: top;           
        }        
    </style>    
</head>
<body>

    <h1 align="center">Lojinha do Cotil</h1>
    <hr>
    <div align="right">        
        <span class="material-symbols-outlined">shopping_cart</span>        
        <span id="qtd"><?=$qtd ?></span>
    </div>    
    <hr>

    <form method="post">

        <div id="produto">
            <img src="supercoffee.jpg" width="50px">
            <br>
            <input type="submit" value="Adicionar ao Carrinho">  
        </div>

    </form>

</body>
</html>