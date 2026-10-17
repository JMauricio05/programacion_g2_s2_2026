<?php

namespace app\controllers\students;

use app\models\repositories\StudentsRepositoryInterface;
use app\models\entities\Student;

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
        $dato_form = new Student(
            0,
            $post_data['codigo'],
            $post_data["nombre"],
            $post_data["email"]
        );
        $student = $this->students_model->save_new_student($dato_form);
        return !empty($student);
    }
}
