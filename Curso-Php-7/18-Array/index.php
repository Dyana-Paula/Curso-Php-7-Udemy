<?php

    $arraynome = array("Valentina","Maria","Fernanda","Pedro","Ana","Lucas","Marcos");

    // Array Associativo

    $arrayalunos = array(
        "Aluno1" => "Ashtar",
        "Aluno2" => "Dyana",
    );

    $arrayalunos = array(
        "Aluno1" => array(
            "nome" => "Ashtar",
            "nota" => 10,
        )
    );
    echo "Alunos matriculados: " . $arrayalunos["Aluno1"]["nome"] ."<br/>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Array</title>
    <meta charset="utf-8" />
</head>
<body>

    <select id="slProfessores" name="slProfessores">
        <?php
            for($i=0; $i <count($arraynome);$i++){
            ?> 
                <option value = "<?=$i?>"><?=$arraynome[$i];?> </option>
            <?php

            }
        ?>
    </select>
    <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>

    
    
</body>
</html>