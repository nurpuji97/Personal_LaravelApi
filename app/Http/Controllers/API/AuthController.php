<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    // sistem login
    public function login(Request $request){

        // check user
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // token 
        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'message' => 'Success',
            'user' => $user,
            'token' => $token
        ], 200);
    }

    // logout
    public function logout(Request $request){
        $user = $request->user();

        // delete user
        $user->currentAccessToken()->delete();

        return Response()->json([
            'message' => 'Berhasil logout'
        ], 200);
    }
}
