<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $titulo = 'Contato';
        /*
        // Como recuperar o objeto Request que vem do cliente; 

        echo '<pre>';
        print_r($request->all());
        echo '</pre>';

        echo $request->input('nome');
        echo '</br>';
        echo $request->input('email');
        */

        /* $c = new SiteContato();
        $c->nome = $request->input('nome');
        $c->nome = $request->input('telefone');
        $c->nome = $request->input('email');
        $c->nome = $request->input('motivo_contato');
        $c->nome = $request->input('mensagem');
        $c->save(); */

        /* $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save(); */

        $contato_2 = new SiteContato();
        $contato_2->create($request->all());
        
        return view('site.contato', compact('titulo'));
    }
}
