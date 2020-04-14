<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }

    public function postlogin(Request $request){

        $request -> validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if(Auth::Attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
