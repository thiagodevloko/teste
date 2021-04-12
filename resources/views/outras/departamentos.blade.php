@extends('layouts.principal')

@section('Titulo', 'Departamentos')

@section('conteudo')
    <h3>Departamentos</h3>

    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessorios</li>
        <li>Roupas</li>
    </ul>

    @component('components.alerta')        
    @endcomponent
    @component('components.alerta')        
    @endcomponent
    @component('components.alerta')        
    @endcomponent
    
@endsection