<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationStoreRequest;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index(){
        return view("pages.registration");
    }

    public function store(RegistrationStoreRequest $registrationStoreRequest){ 
        $data = $registrationStoreRequest->validated();

        $user = User::create($data);

        if($user) {
            return redirect()->route("login");
        }

        return redirect()->route('registration.index');
    }
}
