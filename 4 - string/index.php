<?php

$idade = '30';
$frase = 'o rato roeu a roupa do rei de Roma';

//Não permite usar variável dentro de String
$nome = 'Alexandre {$idade}';

//Quando você quiser usar uma variável dentro de uma String
$nome2 = " Alexandre {$idade} ";

echo $nome;
echo '<br>';
echo $nome2;
echo '<br>';

//conta o tamanho da string
echo strlen($nome2);
echo '<br>';

//"corta" a string até onde você quer
echo substr($nome2, 2, 7);
echo '<br>';

//verifica se a string contém o que está sendo solicitado - 1=existe, nada=não existe
echo str_contains($nome, 'idade');
echo '<br>';

//localização de string
echo strpos($nome,'a', 2);
echo '<br>';

//encontra a última ocorrência do caractare na string e retorna o resto, a partir daí
echo strrchr($nome, 'x');
echo '<br>';

//substitui alguma parte da string
echo str_replace('xandre','x', $nome2);
echo '<br>';

//retorna o caractere na tabela ASCII
echo chr(100);
echo '<br>';

//deixa a string em minúsculo
echo strtolower($nome2);
echo '<br>';

//deixa a primeira palavra da frase com a letra maiúscula
echo ucfirst($frase);
echo '<br>';

//deixa a primeira letra de cada palavra maiúscula
echo ucwords($frase);
echo '<br>';

//inverte a frase
echo strrev($nome);
echo '<br>';

//geram uma cópia criptografada

 /*crypt - gera uma cópia criptografada
      ** retornará uma string criptografada usando o algoritmo de encriptação Unix Standard DES-based ou ou algoritmos alternativos disponíveis no sistema.
*/
// o 2o parâmetro é o salt, que se não fornecido, será gerado randomicamente pelo PHP cada vez que chamar esta função.
echo crypt($nome, 10);
echo '<br>';

/*
      ** sha1 - gera uma cópia criptografada - mão única
      ** 160 bits - 40 caracteres
      ** considerar a mesma regra de segurança com o uso de salt, abordarda no md5 
*/
echo sha1($nome);
echo '<br>';

/*
    md5 - gera uma cópia criptografada - mão única
    ** algoritmo de um hash de 128 bits - 32 caracteres
    ** -> problema: para a mesma string, sempre o mesmo resultado. Fácil achar na internet listas com resultados. 
    ** -> solução: concatenar um salt
*/
echo md5($nome);
echo '<br>';

//divide a string em blocos do tamanho solicitado
$teste = str_split($frase,4);
echo ($teste[0]);
echo ('/');
echo ($teste[1]);
echo ('/');
echo ($teste[2]);
echo ('/');
echo ($teste[3]);
echo ('/');
echo ('<br>');

//remove os espaços em branco no início e no final
echo trim($nome2);
echo ('<br>');

//remove os espaços em branco na esquerda
echo ltrim($nome2);
echo ('<br>');

//converte valores de string para número
$x = (int)$idade;
echo ($x) . '<br>';
echo gettype($x);
echo ('<br>');

/* BASE64
É um método para codificação dos dados para transferência na Internet. Ela é uma codificação de mão dupla, e usando uma segunda função você pode descobrir a string original de uma string codificada. */

$string = 'O rato reu a ropa do rei de Roma';

$codificada = base64_encode($string);

echo "Resultado da codificação usando base64: " . $codificada;

echo "<br>";

$original = base64_decode($codificada);

echo "Resultado da decodificação usando base64: " . $original;

// Note que $original vai ser idêntica a $string