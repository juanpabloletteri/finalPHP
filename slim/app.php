<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require '../clases/materiales.php';

$app = new \Slim\App;

$app->get('/tablamateriales', function (Request $request, Response $response) {  
    $response = Materiales::TablaMateriales();
    return $response;
});
$app->get('/tablacomprador', function (Request $request, Response $response) {  
    $response = Materiales::TablaComprador();
    return $response;
});

$app->post('/agregarmaterial', function (Request $request, Response $response) {  
    $nombre = $request->getParam("nombre");
    $precio = $request->getParam("precio");
    $tipo = $request->getParam("tipo");
    $response = Materiales::AgregarMaterial($nombre, $precio, $tipo);
    return $response;
});

$app->delete('/eliminarmaterial', function (Request $request, Response $response) {  
    $id = $request->getParam("id");
    $response = Materiales::EliminarMaterial($id);
    return $response;
});

$app->put('/aceptarmodificacion', function (Request $request, Response $response) {  
    $nombre = $request->getParam("nombre");
    $precio = $request->getParam("precio");
    $tipo = $request->getParam("tipo");
    $codigo = $request->getParam("codigo");
    $response = Materiales::AceptarModificacion($nombre, $precio, $tipo, $codigo);
    return $response;
});

$app->run();