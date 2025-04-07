<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected News $model)
    {

    }

    public function findAll(){
        return $this->model
            ->get();
    }

    public function findById(int $id) {
        return $this->model->where('id', $id)->first();
    }
}
