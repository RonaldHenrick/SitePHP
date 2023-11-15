<?php
  include_once("config.inc.php");

  $titulo = $_REQUEST['titulo'];
  $texto = $_REQUEST['texto'];

  $sql = "INSERT INTO pagina(titulo,texto)
          VALUES ('$titulo', '$texto')";

  $inserir = mysqli_query($conn, $sql);

  if($inserir){
    echo "Cadastro realizado com sucesso!";
  }else{
    echo "Cadastro não realizado. Houve algum problema";
  }
?>