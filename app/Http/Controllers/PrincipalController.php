<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {

        $motivos_contatos = MotivoContato::all();


        return view('site.principal', ['titulo' => 'Home (teste)', 'motivo_contato' => $motivos_contatos]);
    }
}
