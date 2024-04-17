<?php

namespace App\Http\Controllers;

use App\MotivoContato;
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

        // $contato_2 = new SiteContato();
        // $contato_2->create($request->all());

        $motivos_contatos = MotivoContato::all();
        
        return view('site.contato', compact('titulo', 'motivos_contatos'));
    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos',  //min 3 char, max 40 char
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ],
        [
            'nome.required' => 'O nome precisa estar  preenchido',
            'nome.min' => 'O nome não pode ser tão curto. ',
            'nome.max' => 'O nome não pode ser tão longo. ',
            'nome.unique' => 'O nome informado já está em uso. ',
            'telefone.required' => 'O telefone precisa estar preenchido.',
            'email.email' => 'O e-mail precisa ser válido. ',
            'motivo_contatos_id.required' => 'Escolha um motivo de contato. ',
            'mensagem.required' => 'A mensagem não pode estar vazia. ',
            'mensagem.max' => 'A mensagem está muito longa. '
        ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
