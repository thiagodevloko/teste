<h3>Clientes</h3>
<a href="{{ route ('clientes.create')}}">Novo Cliente</a>
<ul>
    @foreach ($clientes as $c)
        <li>
        {{ $c['id']}} | {{$c['nome']}} 
        | <a href="{{ route ('clientes.edit', $c['id'])}}">Editar</a>
        | <a href="{{ route ('clientes.show', $c['id'])}}">Info</a>

        <form action="{{route('clientes.destroy', $c['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Apagar</button>
        </form>
        </li>
    @endforeach
    </ul>