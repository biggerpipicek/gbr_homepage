<?php

    $lang = $_GET['lang'] ?? '';

    switch($lang) {
        case 'cz':
            echo "CZ";
            break;
        case 'eng':
            echo "ENG";
            break;
        case 'ger':
            echo "DE";
            break;
        case 'pl':
            echo "PL";
            break;
        default:
            $lang = 'eng';
            echo $lang;
            echo "DEFAULT IS ENG";
            break;
    }