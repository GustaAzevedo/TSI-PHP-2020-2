<?php

require_once 'db.php';

//EVITA SQL INJECTION - PREFIRA CONSULTA preparada  
$id = preg_replace('/\D/', '', $_GET['id']);

if ( $objBanco->exec("DELETE FROM contatos WHERE id = $id") !== false ) {
    $msg = 'Registro apagado hehe';
}
else{
    $msg = 'ERRO AO APAGAR O REGISTRO';
}

include 'apagaContatoTpl.php';