@extends('layouts.principal')

@section('Titulo', 'clientes - Edite')

@section('conteudo')
<h3>Edite Cliente</h3>

<form action="{{route('clientes.update', $clientes['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nome</label>  
    <input type="text" name="nome" value="{{$clientes['nome']}}">
    <button type="submit">Cadastrar</button>
</form>
@endsection

