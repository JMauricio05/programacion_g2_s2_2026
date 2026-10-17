<?php

namespace app\models\database;

interface StudentsDBInterface
{
    public function exc_select($sql): array;
}
