<div>
  <center><h1>Posts Disponíveis</h1></center>
  <?php
include_once("config.inc.php");

$busca = "SELECT * FROM post order by id";

$todos = mysqli_query($conn ,$busca);

?>

<table border="1px">
  <tr>
    <td>Id</td>
    <td>Título</td>
    <td>Conteúdo</td>
  </tr>
  <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['titulo'];?></td>
        <td><?=$dados['texto'];?></td>
    </tr>
    <?php } ?>
</table>
</div>