<?php
//escopo global
echo "Escopo Global";
echo "<hr>";
$nome1 = "Lorena";
echo $nome1 . "<br><br>";

//escopo local - o que está no escopo global não é visível no escopo local e vice-versa;
echo "Escopo Local";
echo "<hr>";
function person(){
    //acessando variável global em um escopo local:
    global $nome1;
    //ou
    echo $GLOBALS['nome1'] . "<br>";

    $nome = "Ana";
    echo $nome . "<br>";
    echo $nome1;
}
person();