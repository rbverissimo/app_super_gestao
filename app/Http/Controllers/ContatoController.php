<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {

        $titulo = 'Contato';

        var_dump($_GET);

        return view('site.contato', compact('titulo'));
    }
}
