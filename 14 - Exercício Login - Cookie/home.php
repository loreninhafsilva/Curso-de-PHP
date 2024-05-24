<?php
if(!isset($_COOKIE["InfoUser-Login"])){
    require("erro.php");
} else{
    require("conteudo.php");
}
?>