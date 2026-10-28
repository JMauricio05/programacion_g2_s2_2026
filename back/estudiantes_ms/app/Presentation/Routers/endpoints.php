<?php

use App\Presentation\Repositories\StudentsRepository;
// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    // $app->get('/estudiantes', function (Request $request, Response $response, $args) {
    //     $repository = new StudentsRepository();
    //     return $repository->get_all_students($request, $response, $args);
    // });

    // $app->get('/estudiantes', [StudentsRepository::class, 'get_all_students']);
    // $app->get('/estudiantes/{id}', [StudentsRepository::class, 'get_student']);
    // $app->post('/estudiantes', [StudentsRepository::class, 'create_student']);
    // $app->put('/estudiantes/{id}', [StudentsRepository::class, 'update_student']);
    // $app->delete('/estudiantes/{id}', [StudentsRepository::class, 'delete_student']);

    $app->group('/estudiantes', function (RouteCollectorProxy $group) {
        $group->get('', [StudentsRepository::class, 'get_all_students']);
        $group->get('/{id}', [StudentsRepository::class, 'get_student']);
        $group->post('', [StudentsRepository::class, 'create_student']);
        $group->put('/{id}', [StudentsRepository::class, 'update_student']);
        $group->delete('/{id}', [StudentsRepository::class, 'delete_student']);
    });
};
