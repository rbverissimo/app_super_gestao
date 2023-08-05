<h3>Fornecedor</h3>

@php


@endphp

{{-- Operador @if --}}
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
      <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
      <'h3>Existem vários fornecedores cadastrados</h3>
@else
      <h3>Ainda não existem fornecedores cadastrados</h3>
@endif

{{-- Operador @unless --}}

{{-- Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if($fornecedores[0]['status'] == 'N')
      Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'N')
      Fornecedor inativo
@endunless --}}

@isset($fornecedores)
      @for ($i = 0; isset($fornecedores[$i]) ; $i++)
            Fornecedor: {{ $fornecedores[$i]['nome']}}
            <br>
            Status: {{ $fornecedores[$i]['status']}}
            <br>
            CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
            <!-- 
                  se $variável testada não definida
                  ou
                  $variável testada possuir valor null
            -->
            Telefone: ({{$fornecedores[$i]['ddd'] ?? ''}} 
                  {{$fornecedores[$i]['telefone'] ?? '' }})
            @switch($fornecedores[$i]['ddd'])
                  @case('11')
                        São Paulo - SP
                        @break
                  @case('85')
                        Fortaleza - CE
                        @break
                  @case('32')
                        Juiz de Fora - MG
                        @break
                  @default
                        Estado não identificado
            @endswitch
            <br>
            <hr>
      @endfor
@endisset
<br>

{{-- @isset($fornecedores)
      Fornecedor: {{ $fornecedores[1]['nome']}}
      <br>
      Status: {{ $fornecedores[1]['status']}}
      <br>
      @isset($fornecedores[1]['cnpj'])
            CNPJ: {{ $fornecedores[1]['cnpj'] }}
      @endisset
@endisset --}}


@empty($fornecedores)
{{-- O que é empty para o php
      '', 0, 0.0, '0', null, false, array(), $var sem atribuição
--}}
      <p>Não existem fornecedores!</p>
@endempty

<br>
<h4>Teste da variável for na síntaxe blade</h4>
@for ($i = 0 ; $i < 10 ; $i++)
      {{ $i + $i * 4}} <br>
@endfor


@php $i = 0 @endphp
@while (isset($fornecedores[$i]))
      <p>Fornecedor {{ $i }} CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'nulo'}} identificado </p>
      @php $i++ @endphp
@endwhile
