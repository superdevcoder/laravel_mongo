<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json([
                'access_token' => auth()->user()->api_token,
                'token_type' => 'bearer',
                'user' => auth()->user()
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function register(Request $request)
    {


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => Str::random(60),
        ]);

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }

    public function logout(Request $request)
    {
        dd($request->id);
        Auth::logout();
        return response()->json([
            'message' => 'logout success'
        ]);
    }
}
