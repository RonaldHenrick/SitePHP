<div>
  <center><h1>Posts Disponíveis</h1></center>
  <?php
include_once("config.inc.php");

$busca = "SELECT * FROM post order by id";

$todos = mysqli_query($conn ,$busca);

?>

  <?php while ($dados=mysqli_fetch_array($todos)) {?>
    <div class="post-decoretion">
    <tr>
        <td><center><?=$dados['titulo'];?></center></td>
        <td><center><?=$dados['texto'];?></center></td>
    </tr>
    </div>
    <?php } ?>
</div>