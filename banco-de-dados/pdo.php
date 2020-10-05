<?php

require_once 'config.php';

$objBanco = new PDO( DSN, DB_USER, DB_PASS);

$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);

//var_dump( $objBanco->errorInfo() );  // SUPER IMPORTANTE PARA DEBUG
/*
if ( $apagar = $objBanco->query('DELETE FROM contatos WHERE id = 10')){
    echo"<br>Apagado";
}
else{
    echo"Falha ao deletar";
} 

if ($objBanco->query("UPDATE contatos SET nome = 'Gusta' WHERE id = 85")){
    echo"<br>Atualizado com sucesso";
}
else{
    echo"<br>Falha ao atualizar";
}
*/


if ( $objBanco->query("INSERT INTO contatos (nome, whatsapp) VALUES ('{$_POST['name']}','{$_POST['cell']}')")){
    echo "Inserido com sucesso.";
}
else{
    echo "Falha ao Inserir";
}


foreach ($consulta as $ind => $registro){
    echo "ID: {$registro['id']} NOME: {$registro['nome']} WZAP: {$registro['whatsapp']}  <br> ";
}