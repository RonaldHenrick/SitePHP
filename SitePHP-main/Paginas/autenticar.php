<?php
include_once("config.inc.php");

$nome = $_POST['nameCliente'];
$email = $_POST['emailCliente'];
$sexo = $_POST['sexoCliente'];

$sql = "INSERT INTO usuario (nome,email,sexo) VALUES ('$nome','$email', '$sexo')";

$inserir = mysqli_query($conn, $sql);

if($inserir){
  echo "Login realizado com sucesso!";
}else{
  echo "Login não realizado. Houve algum problema";
}
?>