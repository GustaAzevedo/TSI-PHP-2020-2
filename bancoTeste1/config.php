<?php

//FUNÃO: TER AS CONFIGURAÇÕES DO BANCO

define( 'DSN', 'mysql:dbname=teste1;host=localhost'); 
define( 'DB_USER', 'root');
define( 'DB_PASS', ''); 

$DB = mysqli_connect( 'localhost', 'root', '', 'teste1');