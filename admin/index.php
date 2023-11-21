<?php
    include "config.inc.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="index.css">
    <title>DevMentor.com - Admin</title>
</head>
<body>
            <div class="admin-table">
                <h1>DevMentor - Área do Administrador </h1>
                <ol>
                    <li><a href="../Paginas/index.php">Home</a></li>
                    <li><a href="listarUsuarios.php">Listar Usuários</a></li>
                    <li><a href="post.php">Inserir Nova Página</a></li>
                    <li><a href="listarPost.php">Excluir Post</a></li>
                    <li><a href="atualizar.php">Atualizar Post</a></li>
                </ol>
            </div>
            </div>
        </div>

        <hr>
        <?php
        $var = "admin/home.php";
        @$pg = $_GET['pg'];
    
        if(empty($_SERVER["QUERY_STRING"])) {
            
        } else {
            include("$pg.php");
        }
    ?>
    </div>
</body>
</html>