<?php

    class Pessoa {

        function falar (){
            echo "Olá pessoal";
        }
    }

    $cristopher = new Pessoa();

    $cristopher->nome = "Cristopher";

    echo $cristopher->nome;
    echo "<br>";
    $cristopher->falar();
?>