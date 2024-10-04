<?php 

$heading = "Home";

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "<pre>";

    die();
}

if($_SERVER['REQUEST_URI'] == '/') {
    echo 'bg-gray-900 text-white';
} else {
    echo 'text-gray-300';
}

require "view/index.view.php";