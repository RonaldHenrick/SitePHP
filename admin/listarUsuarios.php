<?php include "config.inc.php"; ?>
<?php

$busca = "Select * from admin order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Nome da página</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['login'];?></td>
        <td><?=$dados['senha']; ?></td>
    </tr>
    <?php } ?>
</table>