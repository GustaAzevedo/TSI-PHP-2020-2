<?php
//FUNÇÃO DO DB É CONECTAR NO BANCO

require_once 'config.php';

//EXEMPLO TRY CATCH
try {
    $objBanco = new PDO( DSN, DB_USER, DB_PASS);
} 
catch ( PDOException $objErro ) {
    echo 'SGBD unavailable: ' . $objErro->getMessage();

    exit();
}
