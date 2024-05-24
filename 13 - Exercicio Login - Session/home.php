<?php
session_start();
    if(!isset($_SESSION['login'])){
        echo include('erro.php');
    } else{
        $login = $_SESSION['login'];
        echo include('conteudo.php');
    }
?>