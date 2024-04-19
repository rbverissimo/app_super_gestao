<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $titulo = 'App - Home';
        
        return view('app.home', ['titulo' => $titulo]);
    }
}
