<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository{
    public function paginate(array $params): LengthAwarePaginator
    {
        $query = User::orderBy('created_at', 'desc');
    
        return $query->paginate($params['per_page'] ?? 10);
    }

    public function getAllUsers()
    {
        return User::all();
    }
    public function createUser($data){
        return User::create($data);
    }
    public function UpdateUser($id, $data){
        $product = User::findOrFail($id)->update($data);
        return $product;
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