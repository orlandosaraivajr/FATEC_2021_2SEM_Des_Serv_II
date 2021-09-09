<h3>Novo Cliente </h3>
    <a href="{{route('clientes.index')}}"> Todos os clientes</a>
    <form action="{{ route('clientes.store')}}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Salvar">
    </form>