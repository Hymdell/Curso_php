<?php

    $queijo = "Cadê meu queijo? Ele estava aqui em cima";
    $retirada = substr($queijo,10,6) . " " . substr($queijo,21,7);

    echo $retirada;