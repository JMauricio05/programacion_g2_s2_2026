<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->post("/sumar", function(Request $request, Response $response, $args){
    $body = $request->getBody()->getContents();
    $data = json_decode($body, true);
    $num1 = $data["numero1"];
    $num2 = $data["numero2"];
    $suma = $num1 + $num2;
    $response->getBody()->write("$num1 + $num2 = $suma");
    return $response;
});

$app->run();
