<?php
//   mysqli_connect( 'localhost', 'usuario', 'senha', 'name-DataBase');
$db = mysqli_connect( 'localhost', 'root', '', 'aulaphp'); //conecta no SGDB


///////////////////////////////////
//  Cria tabela
$query = mysqli_query( $db,
                    'CREATE TABLE IF NOT EXISTS contatos
                    (   id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                    nome VARCHAR(255) NOT NULL, 
                    whatsapp BIGINT )' );

if( $query ){
    echo "tabela contatos criada com sucesso<br>";
}else{
    echo "tabela contatos não foi criada<br>";

    echo mysqli_connect_error();
}

$contato = ['nome' => 'Gustavo Azevedo', 'whatsapp' => '551196767429'];


//////////////////////////////////
//  Insere dados no banco
if ( mysqli_query ( $db, 
                        "INSERT INTO contatos (nome, whatsapp) 
                        VALUES ('{$contato['nome']}', '{$contato['whatsapp']}')")){
    echo "Contato enviado <br>";
}


/////////////////////////////////
//  Lista o que está na tabela
$query = mysqli_query( $db, '   SELECT
                                    id, nome, whatsapp
                                    FROM
                                        contatos');

echo "<br><br><pre>";


echo '<table>';
echo "<tr><td>id</td><td>nome</td><td>whatsapp</td></tr>";
while ( $registro = $query -> fetch_assoc()){
    echo "<tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nome']}</td>
            <td>{$registro['whatsapp']}</td>
        </tr>";
}

echo '</table>';

//////////////////////////////////
//  Apaga Tabela
if ( mysqli_query($db, 'DELETE FROM contatos WHERE id < 10')){
    echo "registro apagado com Sucesso!";
} else {
    echo "Fail";
}


//$_POST $_GET $_REQUEST - Vetores super globais para recebermos dados do usuário

echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";