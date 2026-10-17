<?php

namespace app\models\repositories;

use app\models\entities\Student;

interface StudentsRepositoryInterface
{
    public function get_students_all(): array;
    public function save_new_student(Student $student): bool;
}
