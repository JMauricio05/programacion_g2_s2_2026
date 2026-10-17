<?php

namespace app\controllers\students;

use app\models\repositories\StudentsRepositoryInterface;

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
}
