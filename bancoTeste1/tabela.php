<?php 

require_once 'config.php';

//  Cria tabela
$query = mysqli_query( $DB,
                    'CREATE TABLE IF NOT EXISTS users
                    (   id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                    name VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL, 
                    whatsapp BIGINT )' );


if( $query ){
    echo "tabela contatos criada com sucesso<br>";
}else{
    echo "tabela contatos não foi criada<br>";

    echo mysqli_connect_error();
}