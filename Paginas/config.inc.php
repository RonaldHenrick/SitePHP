<?php

$hostname = "localhost";
$bancodedados = "mysql";
$usuario = "root";
$senha = "";

//Conexão com o servidor: IP do servidor, usuário e senha
  $conn = mysqli_connect($hostname, $bancodedados, $usuario, $senha,);
/*Teste se a variável $conn recebe dados do servidor
  if($conn){
    echo "Conexão com o servidor bem sucedida!";
  }
*/


//Selecionar BD
$bd = mysqli_select_db($conn, "projeto");
?>