<?php

    $rato = "O rato roeu a roupa do rei de Roma";
    $i=0;
    for($x=0;$x<strlen($rato);$x++){
        if($rato[$x] === "a"){
            $i++;
        }
    }
    echo "$rato possui $i letras A";