<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    public function register(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);

        $user = User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password')
        ]);

        $token = $user->createToken('token_new_register')->plainTextToken;

        $respon = [
            'user' => $user,
            'token' => $token
        ];

        return response($respon, 200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'massage' => 'Email Atau Password anda salah'
            ], 401);
        }

        $token = $user->createToken('token_Login')->plainTextToken;

        $respon = [
            'user' => $user,
            'token' => $token
        ];

        return response($respon, 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response(['massage' => 'Terimakasih anda berhasil Togout'], 200);
    }
}
