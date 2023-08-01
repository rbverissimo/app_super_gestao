<h3>Fornecedor</h3>

@php


@endphp

{{-- Operador @if --}}
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
      <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
      <h3>Existem vários fornecedores cadastrados</h3>
@else
      <h3>Ainda não existem fornecedores cadastrados</h3>
@endif

{{-- Operador @unless --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if($fornecedores[0]['status'] == 'N')
      Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'N')
      Fornecedor inativo
@endunless

