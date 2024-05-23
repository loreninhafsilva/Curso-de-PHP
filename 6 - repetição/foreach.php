<?php

$cores = array("Branco", "Verde", "Vermelho");

foreach($cores as $cor){
    echo $cor . "<br>";
}

echo "<hr>";

for ($i=0; $i<= count($cores); $i++){
    echo $cores[$i] . "<br>";
}

echo "<hr>";

$produtos = array(19.9, 199.99, 50.00);
$total = 0;

foreach($produtos as $valor){
    $total = $total + $valor;
}
echo $total;