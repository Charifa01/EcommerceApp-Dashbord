<?php

namespace App\Repositories;
use App\Models\User;

class UserRepository{

    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::findOrFail($id);
    } 

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}