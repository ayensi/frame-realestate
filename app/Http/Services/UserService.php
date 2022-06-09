<?php

namespace App\Http\Services;

use App\Http\Contracts\IUserService;
use App\Http\Repositories\UserRepository;

class UserService implements IUserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register($data)
    {
        $this->userRepository->newUser($data);
    }

}
