<?php

namespace app\models\repositories;

use app\models\database\StudentsDBInterface;
use app\models\entities\Student;
use app\models\mappers\StudentsMappers;
use Exception;

class StudentsRepository implements StudentsRepositoryInterface
{
    private StudentsDBInterface $students_db;

    public function __construct(StudentsDBInterface $students_db)
    {
        $this->students_db = $students_db;
    }

    public function get_students_all(): array
    {
        $sql = "select * from estudiantes";
        $rows_db = $this->students_db->exc_select($sql);
        $students = [];
        foreach ($rows_db as $item) {
            array_push($students, StudentsMappers::to_entity($item));
        }
        return $students;
    }

    public function save_new_student(Student $student): bool
    {
        $sql = "insert into estudiantes(codigo,nombre,email)values";
        $sql .= "('" . $student->get_code() . "','" . $student->get_name() . "','" . $student->get_email() . "')";
        $result = $this->students_db->exc_query($sql);
        return $result;
    }

    public function find_student_by_id(int $id): Student|null
    {
        $sql = "select * from estudiantes where id=$id";
        $rows_db = $this->students_db->exc_select($sql);
        foreach ($rows_db as $item) {
            return StudentsMappers::to_entity($item);
        }
        return null;
    }

    public function save_student(Student $student): bool
    {
        $sql = "update estudiantes set ";
        $sql .= " codigo='" . $student->get_code() . "', ";
        $sql .= " nombre='" . $student->get_name() . "', ";
        $sql .= " email='" . $student->get_email() . "' ";
        $sql .= " where id=" . $student->get_id();
        return $this->students_db->exc_query($sql);
    }
}
