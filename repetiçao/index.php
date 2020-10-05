<?php 
date_default_timezone_set('America/Sao_Paulo');

//exemplo for
for ( $i = 0, $j = 4; $i < 5; $i++, $j--){
    echo "Linha $i $j <br>";
}
echo "<br><br>";


//exemplo while - Nem sempre faz a primeira linha
$i = 0;
$j = 4;

while ($i < 5){
    echo "Linha: $i $j <br>";
    $i++;
    $j--;
}
echo "<br><br>";


//exemplo do while - sempre faz a primeira linha
$i = 0;
$j = 4;

do {
    echo "Linha $i $j <br>";
    $i++;
} while( $i < 5 && $j >= 0);



$domingo   =0;
$segunda   =1;
$terca     =2;
$quarta    =3;
$quinta    =4;
$sexta     =5;
$sabado    =6;



switch ( date('w')){
    case $domingo:
        echo 'domingo';
        break;
    case $segunda:
        echo 'segunda';
        break;
    case $terca:
        echo 'terça';
        break;
    case $quarta:
        echo 'quarta';
        break;
    case $quinta:
        echo 'quinta';
        break;
    case $sexta:
        echo 'sexta';
        break;
    case $sabado:
        echo 'sabado';
        break;
}

echo "<br>";

$semana[0] = 'domingo';
$semana[1] = 'domingo';
$semana[2] = 'domingo';
$semana[3] = 'domingo';
$semana[4] = 'domingo';
$semana[5] = 'domingo';
$semana[6] = 'domingo';

$hoje = date('w');

echo "hoje é " . $semana[$hoje];