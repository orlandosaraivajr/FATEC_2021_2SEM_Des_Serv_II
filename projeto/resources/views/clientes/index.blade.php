@extends('layouts.principal')

@section('conteudo')
<h3>{{ $titulo }}</h3>
    <a href="{{route('clientes.create')}}"> Novo Cliente</a>
    @if(count($clientes) === 0)
        <h4>Nenhum cliente cadastrado</h4>
    @else
        <ol>
        @foreach ($clientes as $cliente)
            <li>
                {{ $cliente['nome'] }}
                <a href="{{route('clientes.edit',$cliente['id'])}}"> Editar</a>
            </li>
            <form action="{{ route('clientes.destroy', $cliente['id'])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Apagar">
            </form>
        @endforeach
        </ol>
    @endif
@endsection