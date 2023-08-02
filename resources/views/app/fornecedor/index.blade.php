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
      Fornecedor: {{ $fornecedores[1]['nome']}}
      <br>
      Status: {{ $fornecedores[1]['status']}}
      <br>
      CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
      <!-- 
            se $variável testada não definida
            ou
            $variável testada possuir valor null
      -->
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
