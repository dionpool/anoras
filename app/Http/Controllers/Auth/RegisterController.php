<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.creation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
           'name' => ['required'],
           'email' => ['required', 'email', 'unique:users'],
           'password' => ['required', Password::min(6)]
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect(route('creation'));
    }
}
