<?php

namespace app\controllers\mappers;

use app\models\entities\Student;

class StudentsControllerMappers
{
    public static function to_entity(array $request): Student
    {
        return new Student(
            empty($request["id"]) ? 0 : $request["id"],
            $request["codigo"],
            $request["nombre"],
            $request["email"],
        );
    }
}
