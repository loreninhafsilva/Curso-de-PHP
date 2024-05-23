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

//echo gettype($null);

//isset - verificar se uma variável, ou o elemento de um array, foi definido (setado), com a função isset( )

$nota1 = 10;
$nota2;

if ( isset($nota1) && isset($nota2) ) {
    $media = ($nota1 + $nota2)/2;
    echo "Média = " . $media;
    echo '<br>';
} else {
    echo "Informe as duas notas!";
}

define("PI", 3.14);

$media = 4.5 * PI;
echo "Média = " . $media;

?>