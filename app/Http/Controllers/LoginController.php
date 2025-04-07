<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function index(){
        return view("pages.login");
    }

    public function login(LoginRequest $LoginRequest){
        $data = $LoginRequest->validated();

        if (Auth::attempt($data)) { 
            return redirect()->route("profile.index");
        }

        return redirect()->route('login');
    }}