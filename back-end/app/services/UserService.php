<?php

namespace App\Services;
use App\Repositories\UserRepository;


class UserService
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
{
    return $this->userRepository->getAllUsers();
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