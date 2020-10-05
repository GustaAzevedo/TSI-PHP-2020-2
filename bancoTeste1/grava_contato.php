<?php

require_once 'db.php';

//EVITANDO SQL INJECTION
$objTratado = $objBanco->prepare('  INSERT INTO users
                                        ( name, whatsapp, password)
                                    VALUES
                                    ( :nome, :whats :senha)');

$objTratado->bindParam(':nome', $_POST['name']);
$objTratado->bindParam(':whats', $_POST['whatsapp']);
$objTratado->bindParam(':senha', $_POST['password']);

//Execute
if ( $objTratado->execute()){
    $notice = 'Obrigado por ter se cadastrado';
}
else{
    $notice = 'Não deu certo, tente novamente';
}

include_once 'grava_contato_temp.php';