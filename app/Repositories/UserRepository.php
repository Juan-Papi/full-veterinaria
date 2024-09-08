<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserRepository
{
    public function createUser(string $name, string $email, string $password)
    {
        $user = new User();
        $user->id = Str::uuid()->toString();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();
        return $user;
    }

    public function updateUser(string $id, string $name, string $email, string $password)
    {
        $user = User::findOrFail($id);
        $user->name = $name;
        $user->email = $email;
        if ($password != '') $user->password = bcrypt($password);
        $user->update();
        return $user;
    }
}
