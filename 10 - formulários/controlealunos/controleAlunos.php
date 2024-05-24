<?php

  //$_REQUEST[123, "Simone", "DS"];

  $op = $_REQUEST["op"];
  echo "Operação: " . $op;  
  echo "<hr>"; 

  $ra = $_REQUEST["ra"];
  echo "RA: " . $ra;
  echo "<br>";

  if ($op == "save") {

    $nome = $_REQUEST["nome"];
    $curso = $_REQUEST["curso"];
    
    echo "Nome: " . $nome;
    echo "<br>";
  
    echo "Curso: " . $curso;
    echo "<br>";     
    echo "salvando ...";

  } else if ($op == "del") {

    echo "deletando ...";

  } else if ($op == "update") {

    echo "alterando ...";    

  } else if ($op == "search") {

    echo "buscando ...";        

  } else {

    echo "operação inválida";

  }
?>