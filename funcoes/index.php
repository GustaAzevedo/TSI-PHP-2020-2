<?php

function operacao ( float $num1, float $num2, string $operacao = '*'): float
{
    switch ( $operacao ){
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '/':
            return $num1 / $num2;

        case '*':
            return $num1 * $num2;
        default:
            return 0.0;
    }
}

echo "<br> O resultado é " . operacao( 2.5, 2.5 ) . "<br>";



function diaSemana (int $numSemana): string
{
    switch ( $numSemana ){
        case 0:
            return 'domingo';
        case 1:
            return 'segunda';
        case 2:
            return 'terça';
        case 3:
            return 'quarta';
        case 4:
            return 'quinta';
        case 5:
            return 'sexta';
        case 6:
            return 'sabado';
        default:
            return 'algo de errado não está certo';
    }
}

echo "<br> O resultado é " . diaSemana(6) . "<br><br.";


$nome = 'guu';

function mudaNome( string &$var): string
{
    $var = 'hehe nome novo';
    return $var;
}

echo "<br> A função retornará: " . mudaNome($nome) . "<br><br>";
echo "<br> A função retornará: " . $nome . "<br><br>";