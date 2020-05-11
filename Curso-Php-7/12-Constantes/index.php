<?php

define("min", 17);
define("max", 45);

$idade = 25;

echo "min" . min . "<br/>";
echo "max" . max . "<br/>";
echo "idade" . $idade . "<br/>";

if($idade >= min && $idade <= max){
    echo "Acesso Liberado...";
}else{
    echo "Acesso Bloqueado!";
}

echo "<br/>" . PHP_VERSION;

?>