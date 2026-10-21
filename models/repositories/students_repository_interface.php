<?php

namespace app\models\repositories;

use app\models\entities\Student;

interface StudentsRepositoryInterface
{
    public function get_students_all(): array;
    public function save_new_student(Student $student): bool;
    public function find_student_by_id(int $id): Student|null;
    public function save_student(Student $student): bool;
}
