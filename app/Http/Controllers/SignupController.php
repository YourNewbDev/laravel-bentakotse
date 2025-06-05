<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function __invoke(Request $request)
    {
        $userData = $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
        ]);

        $userData['password'] = Hash::make($userData['password']);

        $user = User::create(($userData));

        Auth::login($user);

        return redirect()->route('home');
    }
}
