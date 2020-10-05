<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edita contato</title>
</head>

<body>
    <div class=" container">
        <div class=" title">
            <a href="listaContato.php">Listar</a>
            <a href="listaContato.php">Editar</a>
            <a href="listaContato.php">Apagar</a>
            <h1>Edite seu contato</h1>
            <?php
                if ( isset($msg) ) echo $msg;
            ?>
        </div>
        <div class=" form">
            <form method="post" action="editaContato.php">
                Nome: <input type="text" name="name" value="<?php echo$contato['nome'] ?>">
                Celular: <input type="text" name="cell" value="<?php echo$contato['whatsapp'] ?>">
                <input type="hidden" name="id" value="<?php echo$contato['id'] ?>">
                <input class=" btn" type="submit" value="Update">
            </form>
        </div>
    </div>
</body>

</html>