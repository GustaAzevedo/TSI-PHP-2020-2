<?php

$clima = 'gelado';
//condicional if
if ( $clima == 'gelado'){
    echo "<br><br>meu pé congela!<br><br>";
}



$bool = '1';
//condicional "operador ternário"
$var = $bool === true ? '$bool é igual a 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

$var = $bool == true ? '$bool é igual a 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

$var = $bool !== true ? '$bool é diferente de 1' : '$bool é igual de 1';

echo $var . '<br><br>';



$frase = 'Meu pai comprou um Patinho';

//if com comparador de valor e tipo de variável
if ( strpos( $frase, 'Meu') !== false){
    echo "tem o Meu <br><br>";
}
else{
    echo "tem Meu não <br><br>";
}



//Qual seu gênero musical favorito?
$musica = 'rock';
//switch
switch ( $musica ){
    case 'rock':
        echo "fedido";
        break;
    
    case 'funk':
        echo "maloka";
        break;
    
    case 'axé':
        echo "festeiro";
        break;
    
    case 'eletronica':
        echo "Drugs";
        break;
    default:
        echo'escute outro gênero';
        break;

}
echo '<br><br>';

$estado = 'são paulo';
switch ($estado){

    case 'são paulo':
    case 'rio de janeiro':
        echo 'Cidade de nóia';

        if (true){
            echo '<br> ---- if dentro de switch';
            if (true){
                echo '<br> ----if aninhado dentro de switch';
            }
        }
}

