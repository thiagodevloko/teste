<h3>Novo Cliente</h3>

<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <input type="text" name="" id="nome">
    <label for="">Nome</label>   
</form>