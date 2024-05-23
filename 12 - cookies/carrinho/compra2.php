<?php

    if ($_SERVER["REQUEST_METHOD"] === 'GET') {

        //verifica se já tem algum produto gravado em cookie
        if (!isset($_COOKIE["qtd"])) {
            $qtd = 0;
        } else {
            $qtd = $_COOKIE["qtd"];
        }
    
    }    
    else if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        //verifica se já tem algum produto gravado em cookie
        if (!isset($_COOKIE["qtd"])) {
            $qtd = 1;

            $codigo = $_POST["codigo"];
            $descricao = $_POST["descricao"];
            $valor = $_POST["valor"];

            //cria um array associativo com os dados do produto
            $produto = array("codigo"=>$codigo, "descricao"=>$descricao, 
                             "valor"=>$valor);
            
            //adiciona o array associativo do produto a um array carrinho que deverá conter todos os produtos
            $carrinho = array();
            array_push($carrinho, $produto);           

        } else {

            $qtd = $_COOKIE["qtd"]+1;

            $codigo = $_POST["codigo"];
            $descricao = $_POST["descricao"];
            $valor = $_POST["valor"];

            //cria um array associativo com os dados do produto
            $produto = array("codigo"=>$codigo, "descricao"=>$descricao, "valor"=>$_POST["valor"]);

            //lê os dados do carrinho armazenado atualmente em cookie, se existir       
            $carrinhoAtual = isset($_COOKIE["carrinho"]) ? $_COOKIE["carrinho"] : "";

            //como o array de carrinho tem que ser gravado serializado, para ler é necessário desserializar para adicionar mais itens
            $carrinho = unserialize($carrinhoAtual);

            //adicionando o produto ao carrinho atual
            array_push($carrinho, $produto);

            /*
            Serialização: é quando um objeto é transformado, em uma cadeia de bytes e desta forma pode ser manipulado de maneira mais fácil, seja através de transporte pela rede ou salvo no disco.

            Desserialização: é quando tem a conversão de um byte stream para um objeto ou estrutura de dados novamente
            */
        }    

        //atualiza o cookie de qtd
        setcookie("qtd", $qtd, time()+3600, "/");  //expira em 1 hora

        //atualiza o cookie de carrinho (é necessário serializar o array para gravar em cookie)
        setcookie("carrinho", serialize($carrinho), time()+3600, "/");  //expira em 1 hora
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <style type="text/css">
        #listagemProdutos {
            width: 100%;
            display: flex;                        
            justify-content: space-around;
        }

        #produto {          
          border: 1px black solid;
          width: 250px;
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

        img {
            width: 200px;
            height: 200px;
        }
    </style>    
</head>
<body>

    <h1 align="center">Lojinha do Cotil</h1>
    
    <hr>
    
    <div align="right">        
        <a href="verCarrinho.php"><span class="material-symbols-outlined">shopping_cart</span></a>
        <span id="qtd"><?=$qtd ?></span>        
    </div>    
    
    <hr>   

    <div id="listagemProdutos">

        <div id="produto">
            <img src="camiseta.jpg" width="50px">
            <br>
            <small>Camiseta Branca - R$50,00</small>
            <br>
            <form method="post">
                <input type="hidden" name="codigo" value="cod1">
                <input type="hidden" name="descricao" value="Camiseta Branca">
                <input type="hidden" name="valor" value="50.00">                
                <input type="submit" value="Adicionar ao Carrinho">  
            </form>
        </div>

        <div id="produto">
            <img src="caneca.jpg" width="50px">
            <br>
            <small>Caneca Branca - R$20,00</small>
            <br>
            <form method="post">
                <input type="hidden" name="codigo" value="cod2">
                <input type="hidden" name="descricao" value="Caneca Branca">
                <input type="hidden" name="valor" value="20.00">
                <input type="submit" value="Adicionar ao Carrinho">  
            </form>
        </div>

        <div id="produto">
            <img src="sacochila.jpg" width="50px">
            <br>
            <small>Sacochila Branca - R$40,00</small>
            <br>
            <form method="post">
                <input type="hidden" name="codigo" value="cod3">
                <input type="hidden" name="descricao" value="Sacochila Branca">
                <input type="hidden" name="valor" value="40.00">        
                <input type="submit" value="Adicionar ao Carrinho">  
            </form>
        </div>                

    <div>

</body>
</html>