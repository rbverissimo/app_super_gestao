<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){


        $titulo = 'Produtos';
        return view('app.produto', [ 'titulo' => $titulo]);
    }
}
