<?php
  include_once("config.inc.php");

  $titulo = $_REQUEST['titulo'];
  $texto = $_REQUEST['texto'];

  $sql = "INSERT INTO post(titulo,texto)
          VALUES ('$titulo', '$texto')";

  $inserir = mysqli_query($conn, $sql);

  if($inserir){
    echo "Post realizado com sucesso!";
  }else{
    echo "Post não realizado. Houve algum problema";
  }
?>