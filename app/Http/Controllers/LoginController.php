<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        if(Auth::check())
        {
            return redirect()->intended('/');
        }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(RateLimiter::tooManyAttempts($credentials['email'], 5))
        {
            throw ValidationException::withMessages([
                'email' => ['Too many login attempts. Please try again later.'],
            ]);
        }
 
        if (Auth::attempt($credentials)) {
            RateLimiter::clear($credentials['email']);
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        RateLimiter::hit($credentials['email'], 60);
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
