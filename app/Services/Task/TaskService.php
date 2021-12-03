<?php

namespace App\Services\Task;

use App\Repository\Task\TaskRepository;

class TaskService
{
    protected $task;
    public function __construct(TaskRepository $task)
    {
        $this->task = $task;
    }

    public function getAllActive()
    {
        try {
            $data = $this->task->all();
            return $data;
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
