<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function home()
    {
        
        return view('admin.auth.homepage');
    }

    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('message', 'Signed in!');
        }

        return redirect('/login')->with('message', 'Login details are not valid!');
    }

    public function signup()
    {
        return view('admin.auth.registration');
    }

    public function signupsave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard");
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            $user=Auth::user();
            return view('admin.auth.dashboard',compact('user'));
        }
        return redirect('/login');

        
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('/');
        // return redirect('login'); ancien
    }
}
