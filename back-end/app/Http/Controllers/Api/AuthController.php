<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\AuthResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone'=> 'required',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password)
            ]);
        
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'User created successfully',
            'data'   => new AuthResource($user),
            'token'  => $token,
            'status' => Response::HTTP_OK
        ]);
    }

  public function login(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    $user = User::where('email', $request->email)->first();
    if(empty($user)){
        return response()->json(['message' => 'The email is incorrect', 'status' => Response::HTTP_UNAUTHORIZED], Response::HTTP_UNAUTHORIZED);
    }
    if(!Hash::check($request->password , $user->password)){
        return response()->json(['message' => 'The password is incorrect', 'status' => Response::HTTP_UNAUTHORIZED], Response::HTTP_UNAUTHORIZED);
  };
   $token = $user->createToken('auth_token')->plainTextToken;
   return response()->json([
    'message' => 'Success connection',
    'api_token'    => $user->token,
    'data'    => new AuthResource($user),
    'status'  => Response::HTTP_OK
]);
  }




}