<?php

    $lang_code = $_GET['lang_code'] ?? '';

    switch($lang_code) {
        case 'cz':
            echo "CZ";
            $lang = [
                'home' => 'Home',
                
            ];
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
            $lang_code = 'eng';
            echo $lang_code;
            echo "DEFAULT IS ENG";
            break;
    }