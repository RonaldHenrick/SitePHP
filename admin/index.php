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

    <title>MeuSite.com - Admin</title>
</head>
<body>
                <h1>Painel Admin </h1>
                <ol>
                    <li><a href="../Paginas/index.php">Home</a>
                    </li>
                    <li class="active"><a href="../admin/mostrarPost.php">Listar Páginas</a></li>
                    <li class="active"><a href="../admin/post.php">Inserir Nova Página</a></li>
                </ol>
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