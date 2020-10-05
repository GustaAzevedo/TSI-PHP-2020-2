<?php

require_once 'db.php';

if( isset($_POST['procura']) ){

    $objStmt = $objBanco->prepare(' SELECT 
                                        id, nome, whatsapp 
                                    FROM
                                        contatos
                                    WHERE
                                        nome LIKE :pro');

    $procura = '%' . $_POST['procura'] . '%';

    $objStmt->bindParam(':pro',$procura);

    $objStmt->execute();

   while ( $tab = $objStmt->fetch(PDO::FETCH_ASSOC) ) {
        
        $tabela[$tab['id']] = $tab;

   }
   $tabela = $tabela ?? array();

   include 'procuraContatoTpl.php';
}

