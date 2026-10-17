<?php

namespace app\models\entities;

class Student
{
    private int $id;
    private string $code;
    private string $name;
    private string $email;

    public function __construct(
        int $id,
        string $code,
        string $name,
        string $email
    ) {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->email = $email;
    }

    public function get_id(): int
    {
        return $this->id;
    }
    public function get_code(): string
    {
        return $this->code;
    }
    public function get_name(): string
    {
        return $this->name;
    }
    public function get_email(): string
    {
        return $this->email;
    }
}
