<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserService
{
    protected UserRepository $userRepository;


    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(string $name, string  $email, string $password)
    {
        $user = $this->userRepository->createUser($name, $email, $password);
        return $user;
    }

    public function updateUsuario(string $id, string $name, string  $email, string $password)
    {
        $user = $this->userRepository->updateUser($id, $name, $email, $password);
        return $user;
    }
}
