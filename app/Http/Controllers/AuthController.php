<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function authCreate()
    {
        return view('halaman-utama');
    }

    public function loginCreate()
    {
        return view('login');
    }

    public function registerCreate()
    {
        return view('register');
    }

    public function successCreate()
    {
        return view('berhasil-register');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records. dadadadad',
        ]);
    }
    function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $credentials = $request->only('name', 'email', 'password');

        $countForAdmin = User::count();
        if ($countForAdmin === 0) {
            $credentials['role'] = 'Admin';
            User::unguard();
        }
        
        if (User::where('email', $credentials['email'])->exists()) {
            return back()->withErrors([
                'email' => 'The email is already taken.'
            ]);
        }

        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'role' => isset($credentials['role']) ? $credentials['role'] : '',
        ]);
        User::reguard();

        return redirect(route('success.create')); 
    }
    function logout(Request $req)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect(route('home'));
    }    
}
