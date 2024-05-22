<?php

//string

$nome = 'Nome';
echo $nome . ' ';
echo gettype($nome) . '<br>';

//int e float
$idade = 17;
echo $idade . ' ';
echo gettype($idade) . '<br>';

$altura = 1.5;
echo $altura . ' ';
echo gettype($altura) . '<br>';

//booleans
$gostou = true;
echo $gostou . ' ';
echo gettype($gostou) . '<br>';

//arrays
$livros = ['Para Todos os Garotos que Já Amei', 'Até que eu volte', 'Sherlock Holmes'];
foreach($livros as $v){
    echo $v.' , ';
}
echo gettype($livros). '<br>';

//object

class Person{

}

echo gettype(new Person) . '<br>';

//null
$null;

echo gettype($null);

?>