<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request) 
    {
        if ($request->isMethod('POST')) {
            
            $user = User::where('email', $request->email)->first();
            
            if (
                Hash::check($request->password, $user->password)
                && Auth::attempt([
                    'email' => $request->email, 
                    'password' => $request->password
                ])
            ) {
                return redirect()->route('user.home');
            }
        }

        return view('users.login');
    }

    public function logout() 
    {
        Auth::logout();

        return redirect()->route('user.login');
    }

    public function register() 
    {
        return view('user.register');
    }

    public function store(Request $request) 
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(User::create($data)) {
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect()->route('user');
            }
        }

        return redirect()->route('user.login');
    }
}
