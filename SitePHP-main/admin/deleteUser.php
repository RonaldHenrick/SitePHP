<?php
include_once("config.inc.php");

$delete = $_REQUEST['delete'];

$sqlSelect = "SELECT * FROM usuario WHERE id=$delete";

$result = mysqli_query($conn,$sqlSelect);

if($result->num_rows > 0){
  $sqlDelete = "DELETE FROM usuario WHERE id=$delete";
  $resultDelete = mysqli_query($conn,$sqlDelete);
}
if($sqlDelete){
  echo "Usuário deletado com sucesso";
}else{
  echo "Falha ao excluir usuário";
}

?>