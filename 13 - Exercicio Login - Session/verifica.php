<?php

if($_SERVER["REQUEST_METHOD"] ==="GET"){

    $login = "";
    $senha = "";

} else if($_SERVER["REQUEST_METHOD"] ==="POST"){

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if((ltrim($login) != " ") && (ltrim($senha) != " " && ($login == "Lorena") && ($senha == "12345678")) ){
        if(strlen($login) >= 5){
            if(strlen($senha) >= 8){
                $senhaSegura = crypt($senha, 10);
                if($senhaSegura != $senha){
                    session_start();
                    $_SESSION['login'] = $login;
                    header("Location: home.php");
                } else {
                    $msg = "A senha é inválida";
                }
            } else {
                $msg = "A senha tem que ter no mínimo 8 caracteres";
            }
        } else {
            $msg = "O login tem que ter no mínimo 5 caracteres";
        }
    } else {
        $msg = "Login ou senha incorretos";
    }
} else {
    $msg = "Login e senha não podem estar vazios";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Erro</h1>
    <p><?=$msg;?></p>
</body>
</html>