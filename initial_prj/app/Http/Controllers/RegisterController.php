<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

/*     public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    } */


    public function showPage()
    {
        return view('auth.register');
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
    
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator);
        }

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        $credentials = $req->only('email', 'password');
        Auth::attempt($credentials);
        $req->session()->regenerate();
        return redirect()->route('shop')
            ->withSuccess('You have successfully registered & logged in!');
    }
}
