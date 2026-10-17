<?php

namespace app\models\database;

interface StudentsDBInterface
{
    public function exc_select($sql): array;
    public function exc_query($sql): bool;
}
