<?php

namespace App\Repository\Task;

interface TaskRepositoryInterface
{
    public function all();
    public function create(array $attributes);
}
