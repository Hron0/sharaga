<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showPage() {
        return view('auth.register');
    }

    public function register() {
        
    }
}
