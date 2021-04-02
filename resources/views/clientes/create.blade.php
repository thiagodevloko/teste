@extends('layouts.principal')

@section('conteudo')
    <h3>Novo Cliente</h3>
    <form action="{{route('clientes.store')}}" method="POST">
        @csrf
        <label for="">Nome</label>  
        <input type="text" name="nome">
        <button type="submit">Cadastrar</button>
    </form>    
@endsection