<?php

    echo "Exemplo 1<br/><br/>";
    
    $arrayfrutas0 = array("Abacaxi","Limão","Maça","Pera");

    foreach($arrayfrutas0 as $i){
        echo utf8_decode($i . "<br/>");
    }
    
    echo "<br/>Exemplo 2 <br/><br/>";
    $arrayfrutas1 = [
        1 => "Abacaxi",
        2 => "Limão",
        3 => "Maçã",
        4 => "Pera",
    ];

    foreach($arrayfrutas1 as $key => $i){
        echo utf8_decode("Key: {$key} => Value: {$i} <br/>");
    }

    echo "<br/>Exemplo 3 <br/><br/>";

    $arrayNotas = [
        "Aluno1" => [
            "nome" => "Ashtar",
            "nota" => 10
        ],
        "Aluno2" => [
            "nome" => "Dyana",
            "nota" => 10
        ],
        "Aluno3" => [
            "nome" => "Pandora",
            "nota" => 10
        ],
        "Aluno4" => [
            "nome" => "Lutero",
            "nota" => 10
        ]

        ];

        foreach($arrayNotas as $aluno){
            foreach($aluno as $chave => $valor){
                echo "{$chave} = {$valor} <br/>";
            }
        }
?>