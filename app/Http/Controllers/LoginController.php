<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro =  '';
        if($request->get('erro') == 1){
            $erro = 'Usuário e/ou senha não existe.';
        }

        if($request->get('erro') == 2){
            $erro = 'Acesso não autorizado. Acesse com seu usuário e senha válidos. ';
        }

        return view('site.login', ['titulo' => 'Página de Login!', 'erro' => $erro]);
    }

    public function autenticar(Request $request) {

        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];


        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if(isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else { 
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair(Request $request){
        return 'Login Controller sair';
    }
}
