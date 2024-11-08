<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        
    }
    public function getAllCostumers()
    {
        return $this->userService->getAllUsers();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->userService->getUserById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id): Response
    {
        $this->userService->deleteUser($id);
        return response()->noContent();
    }
}
