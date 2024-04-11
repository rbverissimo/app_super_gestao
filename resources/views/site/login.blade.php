@extends('site.layouts.basico')
@push('styles')
      <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
@endpush

@section('titulo', $titulo)

@section('conteudo')
      <div class="conteudo-pagina">
            <div class="titulo-pagina">
                  <h1>Login</h1>
            </div>
            <div class="informacao-pagina">
                  <div style="display:flex; flex-direction: column; width: 75%; margin-right: 12.5%; margin-left: 12.5%">
                        <span style="background-color: #dd0426; color: #fff; border-radius: 5px">
                              {{ isset($erro) && $erro != '' ? $erro : '' }}
                        </span>
                        <form action={{route('site.login')}} method="POST">
                              @csrf
                              
                              <input class="borda-preta" 
                              name="usuario" 
                              value="{{old('usuario')}}"
                              placeholder="Usuário: " type="text" />
                              <span style="color: red;">{{ $errors->has('usuario') ? $errors->first('usuario') : '' }}</span>

                              <input class="borda-preta"
                              type="password" 
                              name="senha" 
                              value="{{old('senha')}}"
                              placeholder="Senha: " />
                              <span style="color: red;">{{ $errors->has('senha') ? $errors->first('senha') : '' }}</span>

                              <button class="borda-preta" type="submit">Acessar</button>
                        </form>
                  </div>
            </div>  
      </div>
      <div class="rodape">
            <div class="redes-sociais">
                  <h2>Redes sociais</h2>
                  <img src="{{asset('img/facebook.png')}}">
                  <img src="{{asset('img/linkedin.png')}}">
                  <img src="{{asset('img/youtube.png')}}">
            </div>
            <div class="area-contato">
                  <h2>Contato</h2>
                  <span>(11) 3333-4444</span>
                  <br>
                  <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                  <h2>Localização</h2>
                  <img src="{{asset('img/mapa.png')}}">
            </div>
      </div>
@endsection
