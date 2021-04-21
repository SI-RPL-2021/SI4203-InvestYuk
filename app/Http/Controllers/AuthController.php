<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // insert auth algorithm 

        // manual login
        // sesuaiin sama database --> cek login manual yang dulu-dulu
        // masuk ke home --> karena belum ada perbedaan level akses
        
        // return redirect(route('dashboard'));
    }
    function register(Request $request)
    {
        // insert auth algorithm 
        
    }
    function logout(Request $req)
    {
        // insert auth algorithm 

        return redirect(route('home'));
    }    
}
