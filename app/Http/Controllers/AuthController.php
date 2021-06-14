<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Kelas;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 
        ['dashboard', 'ajuStatusCreate', 'ajuStatusStore', 'ajuStatusShow']]);
    }


    public function dashboard()
    {
        $user = User::find(auth()->user()->id);
        $kelass = Kelas::where('teacher_id', $user->id)->get();

        if(auth()->user()->ajuStatus != null){
            if(auth()->user()->ajuStatus == 'Rejected'){
                return view('ajustatus/notifikasi-pengajuan-status-ditolak')->with('user', $user);
            }
            if(auth()->user()->ajuStatus == 'Accepted'){
                return view('ajustatus/notifikasi-pengajuan-status-diterima')->with('user', $user);
            }
        }

        // dd($user->id);
        return view('dashboard', ['user'=>$user, 'kelass'=>$kelass]);
    }


    public function ajuStatusAdminCreate()
    {
        $users = User::where('ajuStatus', 'Pending')->get();
        // dd('daura');
        return view('ajustatus/pengajuan-status-admin')->with('users', $users);
    }
    public function ajuStatusAdminStore(Request $request)
    {
        $datas = $request->all();
        $user = User::where('ajuStatus', 'Pending')->get()->keyBy('id');

        // dd($datas);
        // dd($user);
        foreach($datas as $data => $value){
            if($data == '_token') continue;
            // dd($value == "0");
            if($value == "0"){
                $user[$data]->ajuStatus = 'Rejected';
                $user[$data]->save();
            }else{
                $user[$data]->ajuStatus = 'Accepted';
                $user[$data]->save();
            }
        }
        return redirect()->view('ajustatus/pengajuan-status-admin-berhasil');
    }
    public function ajuStatusAdminUpdate($id)
    {
        $user = User::find(auth()->user()->$id);
        dd(auth()->user());
        if($user->ajuStatus == 'Accepted'){
            $user->role = 'Teacher';
        }

        $user->ajuStatus = null;
        $user->save();
        
        return redirect(route('home'));
    }
    public function ajuStatusStudentCreate()
    {        
        dd($id);
        return redirect()->view('ajustatus/pengajuan-status-student2.blade')->with('id', auth()->user()->id);
    }
    public function ajuStatusStudentStore(Request $request)
    {
        $user = User::find(auth()->user()->$id);
        $user->motivasi = $request->motivasi;
        $user->save();
        
        return redirect()->route('ajustatus/pengajuan-status-student-berhasil');
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
        $email = $request->email;
        $data = User::where('email', $email)->first();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Session::put('id', $data->id);
            Session::put('name', $data->name);
            Session::put('email', $data->email);
            Session::put('login', TRUE);

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
    function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}
