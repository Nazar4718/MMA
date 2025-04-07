<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {
    public function __construct(protected User $model)
    {
    }

    public function getUserById(int $userId)
    {
      return $this->model
          ->where('id', $userId)
          ->first();
    }
}
