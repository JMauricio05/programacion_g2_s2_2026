<?php

namespace app\models\mappers;

use app\models\entities\Student;

class StudentsMappers
{
    public static function to_entity(array $row_db): Student
    {
        return new Student(
            $row_db["id"],
            $row_db["codigo"],
            $row_db["nombre"],
            $row_db["email"],
        );
    }
}
