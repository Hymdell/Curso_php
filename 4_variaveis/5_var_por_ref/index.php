<?php

    $x = 10;
    $y =& $x;

    echo "$x <br>$y<br>";
    $y=15;
    echo "Atribuição após ref<br>$x <br>$y<br>";
    $x=12;
    echo "Atribuição após ref2<br>$x <br>$y<br>";
    //tbm funciona para String e outros tipos
?>