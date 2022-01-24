<?php

/**
 * A l'aide de la documentation officielle de PHP.
 * 1. Retrouvez la page traitant des superglobales pour $_SERVER
 * 2. Récupérez un maximum de valeurs de ce tableau et affichez les à l'aide d'un simple echo
 ( il n'est pas interdit d'être intelligent, c'est un tableau associatif... )
 * 3. Uploadez ce projet sur votre serveur et testez !
 */
// TODO Votre code ici
$server = [
    $_SERVER['PHP_SELF'],
    $_SERVER['SERVER_NAME'],
    $_SERVER['SERVER_ADDR'],
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['HTTPS'],
    $_SERVER['REQUEST_TIME'],
    ];

foreach ($server as $value) {
    if (isset($_SERVER[$value])) {
        echo $value .$_SERVER[$value];
    }
    else {
        echo $value;
    }
}