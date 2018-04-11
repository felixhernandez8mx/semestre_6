<?php

require 'vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

	$app = new \Slim\App;

	$app -> get('/regresa/json', function (Request $request, Response $response, array $args) {

    	$datos = array('nombre' => 'Felix Hernandez' , 'cuenta' => '087550193');

    	return $response->withJson($datos);

// Otra opcion
//	    header("Content-type: aplication/json");
//    	echo json_encode($datos);

// Otra opcion
//    $response->getBody()->write("Hello, " . $datos["nombre"] . "  tu numero de cuenta es : " . $datos["cuenta"]);
//    return $response;

	});

	$app -> run();