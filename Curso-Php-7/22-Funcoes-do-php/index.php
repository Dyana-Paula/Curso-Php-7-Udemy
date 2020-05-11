<?php

$nome = "Dyana Paula";

echo substr($nome, 0, 5) . "<br/>"; // Limitar o número de caracteres exibidos

echo strtolower($nome) . "<br/>"; // Colocar os caracteres em maiúsculo

echo strtoupper($nome) . "<br/>"; // Colocar os caracteres em minúsculo

$msg = strip_tags("<h1>Bem-vindo(a)!</h1>"); // Ignora as formatações html
echo $msg . "<br/>";

$comida = "Banana, Pera, Uva";

echo $comida . "<br/>";

$alt = str_replace("Banana", "Morango", $comida); // Substitui informação

echo $alt . "<br/>";

$alt1 = str_ireplace("morango", "Banana", $alt); // Substitui informação ignorando o case sensitive

echo $alt1 . "<br/>";

$meunome = "Dyana Paula Duarte Figueiró";

$primeiroul = explode(" ", $meunome);

echo utf8_decode("Primeiro nome: " . $primeiroul[0] . " - Último nome: " . $primeiroul[3]);

?>