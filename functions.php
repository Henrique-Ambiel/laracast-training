<?php

function dd($value){
    echo "<pres>";
    var_dump($value);
    echo "</pres>";

    die(); /*Função que interrompe imediatamente o script 
    (útil em situações que se uma condição crítica não for atendida ou ocorrer erro)*/ 
}

function urLIs($value){
    return $_SERVER('REQUEST_URI') == $value;
}