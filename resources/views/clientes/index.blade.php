@extends('layouts.principal')

@section('conteudo')
<h3>{{$titulo}}</h3>
<a href="{{ route ('clientes.create')}}">Novo Cliente</a>
<style>
    li{
        display: flex;
        list-style: none;
        padding-bottom: 5px;     
    }
    a{
        padding-left: 10px;
        margin-right: 10px;
    }
    
</style>
@if (count($clientes)>0)    
<ul>
    @foreach ($clientes as $c)
    <li>
        {{ $c['id']}} | {{$c['nome']}} |
        <a href="{{ route ('clientes.edit', $c['id'])}}">Editar</a>
        <a href="{{ route ('clientes.show', $c['id'])}}">Info</a>
        
        <form action="{{route('clientes.destroy', $c['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Apagar</button>
        </form>
    </li>
    @endforeach
</ul>
@else
    <h4>Não exitem usuarios cadastrados...</h4>
@endif
@endsection