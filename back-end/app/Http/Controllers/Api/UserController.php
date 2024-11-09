<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\userResource;
use App\Http\Resources\usersResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function index(Request $request)
    {
        $params = $request->only(['per_page', 'search']);
        $users = $this->userService->paginate($params);
        return usersResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $this->userService->createUser($data);
        return response()->json(['message' => 'User created successfully'], 201);
       
    }
    public function getAllCostumers()
    {
        $users = $this->userService->getAllUsers();
        return usersResource::collection($users);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->userService->getUserById($id);
        return new usersResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $user = $this->userService->UpdateUser($id,$data);
        return new usersResource($user);
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
