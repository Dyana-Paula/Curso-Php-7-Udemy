<?php

$salario = 1567.76;
$valorAjuste = 0;

function ajustarSalario($sal, &$valorAjuste){

        $valorAjuste = 300.00;
        return ($sal + $valorAjuste);
}

$valorFinal = ajustarSalario($salario, $valorAjuste);

echo utf8_decode("O valor ajustado é de: R$" . $valorFinal . ",00 com aumento de R$" . $valorAjuste . ",00."); 

?>