<?php

namespace app\controllers\students;

use app\controllers\mappers\StudentsControllerMappers;
use app\models\repositories\StudentsRepositoryInterface;
use app\models\entities\Student;
use Exception;

class StudentsController implements StudentsControllerInterface
{

    private StudentsRepositoryInterface $students_model;

    public function __construct(StudentsRepositoryInterface $students_model)
    {
        $this->students_model = $students_model;
    }

    public function get_students(): array
    {
        $list = $this->students_model->get_students_all();
        return $list;
    }

    public function student_create(array $post_data): bool
    {
        $dato_form = StudentsControllerMappers::to_entity($post_data);
        $student = $this->students_model->save_new_student($dato_form);
        return !empty($student);
    }

    public function get_student(int $id): Student
    {
        if(empty($id)){
            throw new Exception("id incorrecto", 1);
        }
        $student = $this->students_model->find_student_by_id($id);
        if(empty($student)){
            throw new Exception("Id:$id no existe", 2);
        }
        return $student;
    }

    public function student_update(array $post_data): bool{
        $datos_form = StudentsControllerMappers::to_entity($post_data);;
        $student = $this->students_model->save_student($datos_form);
        return !empty($student);
    }
}
