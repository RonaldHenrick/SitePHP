<?php 
$name = $_REQUEST['nameCliente'];
$number = $_REQUEST['numberCliente'];
$user_type = $_REQUEST['user_type'];


function salvarDados($value1, $value2, $value3, $value4){
  $arquivo = fopen('dadosDoCliente.txt', "a");

  fwrite($arquivo, "$value1");
  fwrite($arquivo, "$value2");
  fwrite($arquivo, "$value3");
  fwrite($arquivo, "$value4");

  fclose($arquivo);
}
salvarDados($name,$number,$email,$text);

?>