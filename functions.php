<?php

function generaPasswordCasuale($lunghezza) {
    // Definisco caratteri utilizzabili nella password
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}|[]\';:,.<>?';

    // Calcolo la lunghezza della stringa di caratteri
    $lunghezza_caratteri = strlen($caratteri);

    // Inizializzo la password come stringa vuota
    $password = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        // Prendo un carattere casuale dalla stringa di caratteri
        $carattere_random = $caratteri[rand(0, $lunghezza_caratteri)];

        // Aggiungo il carattere casuale alla password
        $password .= $carattere_random;
    }

    // Ritorno la password generata
    return $password;
}

?>