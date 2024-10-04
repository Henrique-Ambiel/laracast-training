<?php

require 'functions.php';

$uri = parse_url($_SERVER[REQUEST_URI])['path']; /*parse_url() analisa uma URL e retorna seus componentes 
como um array associativo*/

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controlers/contact.php',
];

if(array_key_exists($uri, $routes)){ //Verifica se uma chave específica existe dentro de um array
    require $routes[$uri];
} else {
    http_response_code(404); //Define o código de status HTTP que o servidor retornará ao cliente

    echo 'Sorry, not found';
}