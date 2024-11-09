<?php

namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function paginate(array $params): LengthAwarePaginator
    {
        return $this->userRepository->paginate($params);
    }
    public function getAllUsers()
{
    return $this->userRepository->getAllUsers();
 }
 public function createUser($data){
    return $this->userRepository->createUser($data);
}
public function UpdateUser($id, $data){
    return $this->userRepository->UpdateUser($id, $data);
}
 public function getUserById($id)
 {
    return $this->userRepository->getUserById($id);
 }
 public function deleteUser($id)
 {
    $this->userRepository->deleteUser($id);
 }
}