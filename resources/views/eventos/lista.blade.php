@extends('layouts.main')
@section('title', 'SGE, Criar novo evento')
@section('content')

    <h1>Lista de eventos</h1>

    <a href="/"> Home</a>
    <a href="/eventos"> Criar</a>
    <a href="/eventos/listar"> Listar eventos</a>

@endsection

@foreach($eventos as $evento)
        <p>{{$evento->titulo}}</p>
        <p>{{$evento->descricao}}</p>
        <p>{{$evento->data}}</p>
        <p>{{$evento->hora}}</p>
        <p>{{$evento->privado}}</p>
        <p>{{$evento->endereco}}</p>
        <p>{{$evento->custo}}</p>
        <hr>
    @endforeach