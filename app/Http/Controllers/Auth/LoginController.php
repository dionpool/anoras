<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
           'email' => ['required', 'email'],
           'password' => ['required', Password::min(6)]
        ]);

        if (!Auth::attempt($attributes)) {
           throw ValidationException::withMessages([
              'email' => 'Invalid credentials.'
           ]);
        }

        request()->session()->regenerate();

        return redirect(route('overview'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect(route('login'));
    }
}
