<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello', function (Request $request, Response $response) {
    $name = $request->getParam('name');
    $price= $request->getParam('price');
    $response->getBody()->write("nombre, $name - precio $price");

    return $response;
});
$app->run();