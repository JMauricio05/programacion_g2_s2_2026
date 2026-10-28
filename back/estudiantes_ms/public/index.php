<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Base/database.php';

$app = AppFactory::create();

$students_endpoints = require __DIR__.'/../app/Presentation/Routers/endpoints.php';

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->post("/sumar", function (Request $request, Response $response, $args) {
    $body = $request->getBody()->getContents();
    $data = json_decode($body, true);
    $num1 = $data["numero1"];
    $num2 = $data["numero2"];
    $suma = $num1 + $num2;
    $response->getBody()->write("$num1 + $num2 = $suma");
    return $response;
});

$students_endpoints($app);

$app->run();
