@extends('layouts.principal')

@section('conteudo')
<h3>Informação do Cliente </h3>
    <a href="{{route('clientes.index')}}"> Todos os clientes</a>
    <br>
    <p>ID: {{$cliente['id']}}</p>
    <p>Nome: {{$cliente['nome']}}</p>
@endsection