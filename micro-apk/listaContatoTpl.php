<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class=" container">
        <a href="./contato.html">Voltar para o FORM</a>
    </div>
    <div class="container">
        <table border="1">
            <tr>
                <td>ID</td><td>NOME</td><td>WHATSAPP</td>
            </tr>
        
            <?php
                if (is_array($tabela)){

                    foreach($tabela as $id => $reg){
                        echo "
                        <tr>
                            <td>$id</td>
                            <td>{$reg['nome']}</td>
                            <td>{$reg['whatsapp']}</td>
                            <td><a href='apagaContato.php?id=$id'>Apagar</a></td>
                            <td><a href='editaContato.php?id=$id'>Editar</a></td>
                            <td><a href='busca.html?id=$id'>Procurar</a></td>
                        </tr>" ;
                    }
                }
                else{
                    echo "Não há tabela";
                }
            ?>
        </table>
    </div>

</body>

</html>