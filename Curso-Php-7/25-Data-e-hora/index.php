<?php
date_default_timezone_set('America/Sao_Paulo');

echo date("y"); // Retorna os 2 últimos números do ano
echo "<br/>" . date("Y"); // Retorna os 4 números do ano
echo "<br/>" . date("d/m/Y"); // Retorna dia mês e ano
echo "<br/>" . date("H:i:s"); // Retorna hora minuto e segundo

$hora = date("H");

if($hora > 0 && $hora < 5){
    echo "<br/> Boa madrugada";
}
else if($hora > 5 && $hora < 12){
    echo "<br/> Bom dia!";
}
else if($hora > 12 && $hora < 18){
    echo "<br/> Boa Tarde!";
}
else if($hora > 18 && $hora < 19){
    echo "<br/> Boa Tarde/Noite!";
}
else{
    echo "<br/> Boa Noite!";
}

//Um monte de if sem else if não funciona :D

?>