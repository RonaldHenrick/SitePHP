<?php 
$name = $_REQUEST['nameCliente'];
$number = $_REQUEST['numberCliente'];
$email = $_REQUEST['emailCliente'];
$text = $_REQUEST['textoCliente'];

function salvarDados($value1, $value2, $value3, $value4){
  $arquivo = fopen('dadosDoCliente.txt', "a");

  fwrite($arquivo, "$value1");
  fwrite($arquivo, "$value2");
  fwrite($arquivo, "$value3");
  fwrite($arquivo, "$value4");

  fclose($arquivo);
}

function imprimirDados(){
  $arquivo = fopen("dadosDoCliente.txt", "r");

  while(!feof($arquivo)){
    $values = fgets($arquivo);

    echo "<p>$values</p>";

    fclose($arquivo);
  }
}
salvarDados($name,$number,$email,$text);
imprimirDados();
?>