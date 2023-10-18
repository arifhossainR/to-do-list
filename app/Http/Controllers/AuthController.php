<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPost(Request  $request){

        if(Auth::attempt($request->only(['email','password']))){
            return redirect()->route('dashboard');

        }else{
            return redirect()->back()->with('error',__("Email or password doesn't match"));
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
