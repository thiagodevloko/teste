<h3>Edite Cliente</h3>

<form action="{{route('clientes.update', $cliente['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nome</label>  
    <input type="text" name="nome" value="{{$cliente['nome']}}">
    <button type="submit">Cadastrar</button>
</form>

