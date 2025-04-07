<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct(
        public UserService $userService,
        public UserRepository $userRepository,
    )
    {
    }

    public function index() {
        $user = $this->userRepository->getUserById(auth()->user()->id);

        return view("pages.profile", [
            'user' => $user,
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $data = $request->validated();

        $this->userService->update(auth()->user(), $data);

        return redirect()->route('profile.index');
    }

}
