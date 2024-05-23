<?php

function calcMedia($n1, $n2){
    $media = ($n1 + $n2)/2;
    return $media;
}

$media = calcMedia(4.0, 5.0);

$msg = "Média = " . $media . "<br>";

if ($media >= 6.0){
    $msg = $msg . "<br><span id='aprovado'>Aprovado!</span>";
} else {
    $msg = $msg . "<br><span id='reprovado'>Reprovado!</span>"; 
}
?>

<html>
  <head>
      <title>Média</title>
      <style>
          #reprovado {
              background-color: red;
              color: white;
              font-weight: bold;
          }

          #aprovado {
              background-color: green;
              color: white;
              font-weight: bold;
          }
      </style>
  </head>

  <body>    
    <?= $msg ?>
  </body>
</html>