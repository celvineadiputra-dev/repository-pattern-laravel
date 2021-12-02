<?php

namespace App\Repository\Base;


interface EloquentRepositoryInterface
{
    public function allData();
    public function findId(int $id);
    public function create(array $attributes);
    public function update(array $attributes, $id);
    public function destory(int $id);
}
