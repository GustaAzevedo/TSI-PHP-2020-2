<?php

require_once 'db.php';

//SE CLICAR NO BOTÃO ADICIONARR, FAÇA UM UPDATE
if( isset($_POST['id']) ){
    $id = preg_replace('/\D/', '', $_POST['id']);
    $nome = $_POST['name'];
    $whatsapp = $_POST['cell'];

    $objStmt = $objBanco->prepare(' UPDATE 
                                        contatos 
                                    SET
                                        nome = :name, whatsapp = :cell
                                    WHERE
                                        id = :id');

    $objStmt->bindParam(':id', $id);
    $objStmt->bindParam(':name',$nome);
    $objStmt->bindParam(':cell', $whatsapp);

    if ( $objStmt->execute() ){
        $msg = 'contato editado com sucesso';
    }
    else{
        $msg = 'Deu erro, tente novamente ';
    }

}

$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;

//EVITA SQL INJECTION
$id = preg_replace('/\D/', '', $_GET['id']);



$lista_sql = "  SELECT
                    id, nome, whatsapp 
                FROM 
                    contatos 
                WHERE 
                    id = $id";

foreach ($objBanco->query($lista_sql) as $registro ){
    
    $contato = $registro;
}

include 'editaContatoTpl.php';