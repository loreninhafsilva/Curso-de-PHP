<?php

    $listagemProdutos = "";
    $total = 0;

    //verifica se já tem produto em cookie
    if (!isset($_COOKIE["qtd"])) {
        $qtd = 0;
    } else {

        //lê a qtd de produtos
        $qtd = $_COOKIE["qtd"];

        //lê o carrinho atua armazenado em cookie, se houver
        $carrinhoAtual = isset($_COOKIE["carrinho"]) ? $_COOKIE["carrinho"] : "";     
        //como o array de carrinho tem que ser gravado serializado, para ler é necessário desserializar
        $carrinho = unserialize($carrinhoAtual);

        //percorre o carrinho lido, monta string de exibição e calcula total dos produtos        
        foreach($carrinho as $produto) {                    
            $listagemProdutos .= $produto["codigo"] . " - "; 
            $listagemProdutos .= $produto["descricao"] . " - ";
            $listagemProdutos .= $produto["valor"] . "<br>";

            $total += $produto["valor"];
        }

        $total = number_format($total, 2, ",", ".");
        
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style type="text/css">

        #menu {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
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

    <h1 align="center">Lojinha do Cotil - Seu Carrinho</h1>
    
    <hr>

    <div id="menu">
    
        <div>
            <a href="compra2.php">
                <span class="material-symbols-outlined" style="color:red;">house</span>
            </a>
        </div>

        <div align="right">        
            <span class="material-symbols-outlined">shopping_cart</span>        
            <span id="qtd"><?=$qtd ?></span>
        </div>    

    </div>

    <hr>

    <p>Seus itens são:</p>

    <?=$listagemProdutos ?>

    <br>

    <b>Total:</b> <?=$total ?>

</body>
</html>

<!-- melhorias

    - qd o produto for repetido, somar as qts e valor 
    - icone de remover item : pegar o indice no array principal (carrinho) e remover
    
-->