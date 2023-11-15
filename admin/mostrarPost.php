<?php
$conn = mysqli_connect("localhost","root", "");
$bd = mysqli_select_db($conn, "test");

$busca = "SELECT * FROM pagina order by texto";

$dados = mysqli_query($conn ,$busca);

while($tabela = mysqli_fetch_array($dados)){
  echo $tabela['texto'] . '<br/>';
}
?>

<table>
  <tr>
    <td>Id</td>
    <td>Nome da publicação</td>
    <td>Conteúdo</td>
  </tr>
</table>