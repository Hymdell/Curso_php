<?php

    $frase = "Carro, Navio, Barco, Avião, Moto";
    $array = explode(",",$frase);

    for($i=0;$i<count($array);$i++){

        echo $array[$i] . "<br>";
    }