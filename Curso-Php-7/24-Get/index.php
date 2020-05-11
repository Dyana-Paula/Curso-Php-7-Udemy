<?php

$arraynome = array("Valentina","Maria","Fernanda","Pedro","Ana","Lucas","Marcos");

$nome = filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING); // Filtrar caracteres
$email = filter_input(INPUT_GET, "txtEmail", FILTER_SANITIZE_STRING);
$funcionario = "";
$funcionarioCodigo = filter_input(INPUT_GET, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);

if($funcionarioCodigo){ // Método Get conta 0 como vazio, se retornar algum dado, o valor começa a partir de 1, por isso - 1 abaixo.
  $funcionario = $arraynome[$funcionarioCodigo - 1];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Get</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<!--
<form method="post">
<ul>
    <li>Nome: <input type="text" name="txtNome" /></li>
    <li>Email: <input type="text" name="txtEmail" /></li>
    <li>Funcionario: 
        <select name="slFuncionario">
            <?php
            //for($i = 0; $i < count($arraynome);$i++){
               /* ?> <option value="<?=$i?>"><?=$arraynome[$i]?></option>
            <?php
            }
            */?>
        </select>
    </li>
    <input type="submit" name="btnSubmit" value="Cadastrar" />

</ul>
</form>
        -->

<form method="get">
  <div class="form-row">
  <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" name="txtNome" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="txtEmail">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEstado"><?php echo utf8_decode("Funcionário"); ?></label>
      <select name="slFuncionario" class="form-control">
      <option selected>Escolher...</option>
      <?php
            for($i = 0; $i < count($arraynome);$i++){
                ?>
        
        <option value="<?=$i + 1?>"><?=$arraynome[$i]?></option>
        <?php
            }
            ?>
      </select>
    </div>
   
  </div>
  <button type="submit" class="btn btn-primary" value="btnSubmit">Cadastrar</button>
</form>

<br/>
<br/>

<p>Nome: <?=$nome?></p>
<p>Email: <?=$email?></p>
<p><?php echo utf8_decode("Funcionário");?>: <?=$funcionario?></p>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>