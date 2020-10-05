<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Procura contato</title>
</head>

<body>
<div class="container">
        <table border="1">
            <tr>
                <td>ID</td><td>NOME</td><td>WHATSAPP</td><td></td><td></td>
            </tr>
        
            <?php
                if (count($tabela) >= 0){

                    foreach($tabela as $id => $reg){
                        echo "
                        <tr>
                            <td>$id</td>
                            <td>{$reg['nome']}</td>
                            <td>{$reg['whatsapp']}</td>
                            <td><a href='apagaContato.php?id=$id'>Apagar</a></td>
                            <td><a href='editaContato.php?id=$id'>Editar</a></td>
                            
                        </tr>" ;
                    }
                }
                else{
                    echo "<tr>
                    <td colspan='5'>Não encontrei nada com {$_POST['procura']}</td>
                    </td>";
                }
            ?>
        </table>
    </div>
</body>

</html>