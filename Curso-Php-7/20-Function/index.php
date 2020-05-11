<?php

    function Ola(){
        echo utf8_decode("Olá mundo!");
    }

    Ola();

    function Ola2(){
        return " <br/>Olá, meu nome é Dyana, meu email é dyanapaula01@gmail.com";
    }

   echo utf8_decode(Ola2());

   $nome = "Dyana";
   $email = "dyanapaula01@gmail.com";

   function Ola3($nome, $email){
    return "Olá, meu nome é {$nome}, meu email é {$email}";
    }

    echo utf8_decode("<br/>" . Ola3($nome, $email));

?>