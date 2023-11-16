<?php include_once("config.inc.php"); ?>
<?php

$busca = "SELECT * FROM post order by id";

$todos = mysqli_query($conn, $busca);

?>
<table border="1px">
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Título</td>
        <td style="width: 105px;">Conteúdo</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['titulo'];?></td>
        <td><?=$dados['texto']; ?></td>
    </tr>
    <?php } ?>
</table>
<form action="deletePost.php" method="post">
        <label for="delete">Excluir</label>
        <input type="text" name="delete" id="delete">
        <br>
        <button type="submit">Excluir</button>
    </form>