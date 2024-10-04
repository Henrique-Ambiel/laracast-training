<?php 

$uri = parse_url($_SERVER[REQUEST_URI])['path'];  /*parse_url() analisa uma URL e retorna seus componentes 
como um array associativo*/

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
];

function routeToController($routes, $uri){
    if(array_key_exists($routes, $uri)){ //Verifica se uma chave específica existe dentro de um array
        require $routes[$uri];
    } else {
        echo "Sorry not found"; 
        abort(); //Aborta a execução de um script e retorna como resposta um código de status HTTP (Disponível apenas no Laravel)
    }
}

function abort($code = 404){
    http_response_code($code); //Define o código de status HTTP que o servidor retornará ao cliente

    require "views/{$code}.php";

    die();
}

routeToController($routes, $uri);

