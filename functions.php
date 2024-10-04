<?php

function dd($value){
    echo "<pres>";
    var_dump($value);
    echo "</pres>";

    die();
}

function urLIs($value){
    return $_SERVER('REQUEST_URI') == $value;
}