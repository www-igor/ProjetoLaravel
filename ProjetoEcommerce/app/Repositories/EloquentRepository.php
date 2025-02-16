<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class EloquentRepository implements Repository
{

    protected $model;

    private $queryBuilder;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function query(): Builder
    {
        if($this->queryBuilder) {
            return $this->queryBuilder;
        }

        return $this->model->query();
    }
}