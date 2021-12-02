<?php

namespace App\Repository\Task;

use App\Models\Task;
use App\Repository\Base\BaseRepository;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    public function __construct(Task $model)
    {
        parent::__construct($model);
    }

    public function all()
    {
        return $this->allData();
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
}
