<?php include_once("config.inc.php"); ?>
<?php

$busca = "SELECT * FROM usuario order by id";

$todos = mysqli_query($conn, $busca);

?>
<table>
    <tr>
        <td style="width: 25px;">Id:</td>
        <td style="width: 205px;">Nome do Usuário:</td>
        <td style="width: 105px;">Email:</td>
        <td style="width: 105px;">Sexo:</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['email']; ?></td>
        <td><?=$dados['sexo']; ?></td>
    </tr>
    <?php } ?>
</table>