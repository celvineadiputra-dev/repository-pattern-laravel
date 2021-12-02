<?php

namespace App\Repository\Base;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function allData($orderKey = 'id', $type = 'desc')
    {
        try {
            return $this->model::orderBy($orderKey, $type)->get();
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function findId(int $id)
    {
    }

    public function create(array $attributes)
    {
        try {
            $data = $this->model->create($attributes);
            return $data;
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function update(array $attributes, $id)
    {
    }

    public function destory(int $id)
    {
    }
}
