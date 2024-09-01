<?php
$root = $_SERVER['SERVER_ADDR'] == '127.0.0.1' ? '/url' : '';

// Obtener la URL solicitada
$request = $_SERVER['REQUEST_URI'];
// Remover la query string de la URL
$request = strtok($request, '?');


$routes = [
    $root.'/' => 'homeController@load_view',
];

// Comprobar si la ruta existe en el listado
if (array_key_exists($request, $routes)) {
    $controllerAction = explode('@', $routes[$request]);
    $controllerName = $controllerAction[0];
    $action = $controllerAction[1];

    require_once "controllers/$controllerName.php";

    $controller = new $controllerName();
    $controller->$action();
} 
else 
{
    http_response_code(404);
    echo "<h1> Página no encontrada </h1>";
}