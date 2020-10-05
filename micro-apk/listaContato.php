<?php

require_once 'db.php';

//CONSULTA PARA LISTAR MEUS CONTATOS
$tabela = array();

$lista_sql = '  SELECT
                    id, nome, whatsapp 
                FROM 
                    contatos 
                ORDER BY 
                    nome';

foreach ($objBanco->query( $lista_sql ) as $registro){

    $tabela[$registro['id']] = [    'nome' => $registro['nome'], 
                                    'whatsapp' => $registro['whatsapp'] ];
}

//CHAMA O TEMPLETE (FRONT-END)
include 'listaContatoTpl.php';