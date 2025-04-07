<?php

namespace App\Repositories;

use App\Models\Blog;

class BlogRepository {
    public function __construct(protected Blog $model)
    {
    }

    public function findAll() {
        return $this->model
            ->get();
    }

    public function findById(int $id) {
        return $this->model->where('id', $id)->first();
    }
}
