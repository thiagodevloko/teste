@extends('layouts.principal')

@section('Titulo', 'clientes - Detalhes')

@section('conteudo')
<h3>Informações do Cliente</h3>

<p>ID: {{ $clientes['id'] }}</p>
<p>Nome: {{ $clientes['nome'] }}</p>
<br>

<a href="{{ route('clientes.index') }}">Voltar</a>
@endsection