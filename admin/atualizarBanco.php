<?php

include_once ("config.inc.php");
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];


$sql = "UPDATE post SET titulo='$titulo', texto='$texto' WHERE id=$id";
$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados.";
}else{
   echo "Cadastrada com sucesso!";
}
?>