<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = $request->user();
            $token = $user->createToken('api-token')->plainTextToken;
            return response()->json(['message'=>'Authenticated User','token' => $token]);
        }
        return response()->json(['message' => 'Invalid login credentials'], 401);
    }
}
