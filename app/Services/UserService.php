<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserService {
    public function update(User $user, array $data){
        return $user->update($data);
    }
}
