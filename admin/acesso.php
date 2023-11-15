<?php

    include_once("config.inc.php");

    $login = $_POST['admin'];
    $senha = md5($_POST['senha']);

        if ($login != "admin" && $senha != "senha"){
          echo "Senha Incorreta";
        }else{
          echo "<a href='index.php'>Acessar Painel Admin</a>";
        }
?>