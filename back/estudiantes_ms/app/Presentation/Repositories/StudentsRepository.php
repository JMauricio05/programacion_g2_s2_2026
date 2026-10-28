<?php

namespace App\Presentation\Repositories;

use App\Controllers\StudentsController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class StudentsRepository
{

    function get_all_students(Request $req, Response $resp, $args): Response
    {
        $controller = new StudentsController();
        $rows = $controller->all();
        if (count($rows) == 0) {
            return $resp->withStatus(204);
        } else {
            $resp->getBody()->write($rows->toJson());
            return $resp
                ->withStatus(200)
                ->withHeader('Content-Type', 'application/json');
        }
    }

    function get_student(Request $req, Response $resp, $args): Response
    {
        $id = $args["id"];
        $controller = new StudentsController();
        $row = $controller->find_student_by_id($id);
        if (empty($row)) {
            return $resp->withStatus(404);
        } else {
            $resp->getBody()->write($row->toJson());
            return $resp
                ->withStatus(200)
                ->withHeader('Content-Type', 'application/json');
        }
    }

    function create_student(Request $req, Response $resp, $args): Response
    {
        $controller = new StudentsController();
        $body = $req->getBody()->getContents();
        $data = json_decode($body, true);
        $row = $controller->create($data);
        if (empty($row)) {
            return $resp->withStatus(400);
        } else {
            $resp->getBody()->write($row->toJson());
            return $resp
                ->withStatus(201)
                ->withHeader('Content-Type', 'application/json');
        }
    }

    function update_student(Request $req, Response $resp, $args): Response
    {
        $id = $args["id"];
        $body = $req->getBody()->getContents();
        $data = json_decode($body, true);
        $controller = new StudentsController();
        $row = $controller->update($id, $data);
        if (empty($row)) {
            return $resp->withStatus(400);
        } else {
            $resp->getBody()->write($row->toJson());
            return $resp
                ->withStatus(200)
                ->withHeader('Content-Type', 'application/json');
        }
    }

    function delete_student(Request $req, Response $resp, $args): Response
    {
        $id = $args["id"];
        $controller = new StudentsController();
        $row = $controller->delete($id);
        if (empty($row)) {
            return $resp->withStatus(400);
        } else {
            return $resp->withStatus(200);
        }
    }
}
