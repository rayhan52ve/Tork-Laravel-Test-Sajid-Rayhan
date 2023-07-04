<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'],'password' => $data['password']])){
                return redirect()->route('dashboard');
            }else{
                return redirect('login')->with('flash_message','Invalid username or password');
            }
        }

        return view('auth.login');
    }

    public function register(Request $request)
    {
        if($request->isMethod('post')){
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            if(Auth::attempt($request->only('email','password'))){
                return redirect()->route('dashboard');
            }
        }

        return view('auth.register');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
