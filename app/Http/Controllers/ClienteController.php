<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){

        $titulo = 'Clientes';

        return view('app.cliente', ['titulo' => $titulo]);
    }
}
