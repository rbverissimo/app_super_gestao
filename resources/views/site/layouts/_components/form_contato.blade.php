{{ $slot }}
<form action="{{route('site.contato')}}" method="POST">
    @csrf
    <input name="nome" value="{{ old('nome')}}" type="text" placeholder="Nome" class="{{$classe}}">
    @if ($errors->has('nome'))
        <span class="mensagem-erro">{{ $errors->first('nome') }}</span>
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone')}}" type="text" placeholder="Telefone" class="{{$classe}}">
    @if ($errors->has('telefone'))
        <span class="mensagem-erro">{{ $errors->first('telefone') }}</span>
    @endif
    <br>
    <input name="email" value="{{ old('email')}}" type="text" placeholder="E-mail" class="{{$classe}}">
    @if ($errors->has('email'))
        <span class="mensagem-erro">{{ $errors->first('email') }}</span>
    @endif
    <br>
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contato as $motivo)
            <option value="{{$motivo->id}}" {{ old('motivo_contatos_id') == $motivo->id ? 'selected' : '' }}>{{$motivo->motivo_contato}}</option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id'))
        <span class="mensagem-erro">{{ $errors->first('motivo_contatos_id') }}</span>
    @endif
    <br>
    <textarea name="mensagem" class="{{$classe}}">@if (old('mensagem') != ''){{ old('mensagem')}}@else Preencha aqui sua mensagem!@endif
    </textarea>
    @if ($errors->has('mensagem'))
        <span class="mensagem-erro">{{ $errors->first('mensagem') }}</span>
    @endif
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>