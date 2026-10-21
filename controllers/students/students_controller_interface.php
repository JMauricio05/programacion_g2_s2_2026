<?php

namespace app\controllers\students;

use app\models\entities\Student;

interface StudentsControllerInterface
{
    public function get_students(): array;
    public function student_create(array $post_data): bool;
    public function get_student(int $id): Student;
    public function student_update(array $post_data): bool;
}
