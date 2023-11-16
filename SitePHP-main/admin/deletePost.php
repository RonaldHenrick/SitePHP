<?php
include_once("config.inc.php");

$delete = $_REQUEST['delete'];

$sqlSelect = "SELECT * FROM post WHERE id=$delete";

$result = mysqli_query($conn,$sqlSelect);

if($result->num_rows > 0){
  $sqlDelete = "DELETE FROM post WHERE id=$delete";
  $resultDelete = mysqli_query($conn,$sqlDelete);
}
if($sqlDelete){
  echo "Post deletado com sucesso";
}else{
  echo "Falha ao excluir usuário";
}

?>