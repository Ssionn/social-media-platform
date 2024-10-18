<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserRepository
{
    public function createUser($credentials): User
    {
        $user = new User();

        $user->name = $credentials['full_name'];
        $user->username = $credentials['username'];
        $user->email = $credentials['email'];
        $user->password = Hash::make($credentials['password']);
        $user->assignRole('user');

        $user->save();

        return $user;
    }
}
