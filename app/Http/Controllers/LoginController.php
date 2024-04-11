<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login', ['titulo' => 'Página de Login!']);
    }

    public function autenticar() {
        return 'Tamo junto, cuzão';
    }
}
