<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt($request)){
            // tambahkan session

            return redirect(route('home'));
        }
        
        return back()->withErrors([
            'email' => 'The email or password is wrong.'
        ]);
    }
    function register(Request $request)
    {
        if (!User::find(1)) {
            $request['role'] = 'Admin';
            // buat hidden form?
        }
        if (User::where('email', $request['email'])->exists()) {
            return back()->withErrors([
                'email' => 'The email is already taken.'
            ]);
        }

        $user = User::create(request());
        Auth::attempt($user);
        // bisa work auth() ?

        return redirect(route('home'));
    }
    function logout(Request $req)
    {
        // insert auth algorithm 

        return redirect(route('home'));
    }    

    // masukin validator
    // https://github.com/bradtraversy/lsapp/blob/master/app/Http/Controllers/Auth/RegisterController.php
    // https://laravel.com/docs/8.x/validation#manually-creating-validators
    // https://laravel.com/docs/8.x/validation#quick-defining-the-routes --> step by step
    // buat func baru terus sambungin ke register (route ngarah ke validator)
}
