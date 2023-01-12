<?php
    $url = "https://www.bcv.org.ve/terminos-condiciones"; // URL del banco central
    $opts = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $context = stream_context_create($opts);
    $content = file_get_contents($url, false, $context);
    preg_match_all("/([0-9]+,[0-9]+)/", $content, $matches); // Buscamos varios números con una expresión regular
    $number = $matches[1][4]; // Almacenamos el tercer número en una variable
    echo $number;
?>