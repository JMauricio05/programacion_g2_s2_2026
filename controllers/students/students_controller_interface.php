<?php

namespace app\controllers\students;

interface StudentsControllerInterface
{
    public function get_students(): array;

    public function student_create(array $post_data): bool;
}
