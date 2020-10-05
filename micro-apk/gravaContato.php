<?php 

require_once 'db.php';

//Como evitar SQL injection 


//PREPARO CONSULTA
$objStmt = $objBanco->prepare(' INSERT INTO contatos
                                    ( nome, whatsapp)
                                VALUES 
                                    ( :nome, :whats)');


//SUBSTITUI O NM E WHATS PELO VALOR RECEBIDO DO USUÁRIO
$objStmt->bindParam(':nome', $_POST['name']);
$objStmt->bindParam(':whats', $_POST['cell']);


//EXECUTA
if ( $objStmt->execute() ){
    $msg = 'Obrigado por se cadastrar';
}
else{
    $msg = 'Deu erro, tente novamente ';
}



//CHAMA O TEMPLETE (FRONT-END)
include 'gravaContatoTpl.php';