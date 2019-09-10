<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginsController extends Controller
{
    public function login() {
        return view('login/login');
    }

    public function mdpassoublie() {
        return view('login/mdpassoublie');
    }
}
