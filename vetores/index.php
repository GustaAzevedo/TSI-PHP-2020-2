<?php 
date_default_timezone_set('America/Sao_Paulo');

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
$semana[1] = 'segunda';
$semana[2] = 'terça';
$semana[3] = 'quarta';
$semana[4] = 'quinta';
$semana[5] = 'sexta';
$semana[6] = 'sabado';

$hoje = date('w');

echo "hoje é " . $semana[$hoje];

echo "<br>";
unset($semana);

$semana['domingo'] = 0;
$semana['segunda'] = 1;
$semana['terça'] = 2;
$semana['quarta'] = 3;
$semana['quinta'] = 4;
$semana['sexta'] = 5;
$semana['sabado'] = 6;

echo "<br>";
var_dump($semana);
echo "<br><br>";

$hoje = date('l');

echo "hoje é " . $semana[$hoje] . " com índice alfanumérico";
echo "<br><br>";

$usuario = [	'nome' 	=> 	'Luiz Bono',
				'idade'	=>	25,
				'peso'	=>	67.8,
                'signo'	=>	'aquariano'];
echo "O professor {$usuario['nome']} tem {$usuario['idade']} pesa {$usuario['peso']} kg.";

echo "<br><br>";

$pf = [
    "bono" => [
      'nome'   =>   'Luiz Bono',
      'idade'  =>  25,
      'peso'  =>  67.8,
      'signo'  =>  'aquaman'
    ],
    "quintas" => [
      'nome'   =>   'Thiago Quintas',
      'idade'  =>  21,
      'peso'  =>  80,
      'signo'  =>  'farinha'
    ],
    "claro" => [
      'nome'   =>   'Thiago Claro',
      'idade'  =>  35,
      'peso'  =>  85,
      'signo'  =>  'felino'
    ],
  ];

echo "O professor {$pf['bono']['nome']}, tem {$pf['bono']['idade']} anos e pesa {$pf['bono']['peso']}, além de ser {$pf['bono']['signo']} ";
echo "<br><br>";
echo "O professor {$pf['quintas']['nome']}, tem {$pf['quintas']['idade']} anos e pesa {$pf['quintas']['peso']}, além de ser {$pf['quintas']['signo']} ";
echo "<br><br>";
echo "O professor {$pf['claro']['nome']}, tem {$pf['claro']['idade']} anos e pesa {$pf['claro']['peso']}, além de ser {$pf['claro']['signo']} ";

?>
+<table border="1">
+<tr> <td>ID</td> <td>Nome</td> <td>Idade</td> <td>Peso</td> <td>Signo</td> </tr>
+<?php
+//Exemplo de como utilizar uma matriz
+foreach ($professores as $linha => $professor) {
+	
+	echo "<tr> 	<td>$linha</td> 
+				<td>{$professor['nome']}</td> 
+				<td>{$professor['idade']}</td> 
+				<td>{$professor['peso']}</td> 
+				<td>{$professor['signo']}</td> </tr>";
+}
+
+?>
+</table>