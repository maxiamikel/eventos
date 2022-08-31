@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div id="search-container" class="col-md-12">
<h2>Encontrar um evento</h2>
        <form action="/" name="fsearch" method="GET">
            <input type="text" name="search" class="form-control" placeholder="Digite a palavra a buscar">
        </form>
</div>
<div id="events-container" class="vol-md-12">
@if($search)
        <h2>Buscando por: {{$search}}</h2>
    @else
        <h2>Proximos eventos</h2>
        <p class="title-2">Veja os eventos </p>
    @endif
    <div id="cards-container" class="row">
        @foreach($eventos as $evento)
            <div class="card col-md-3">
                <img src="/images/eventos/{{$evento->foto}}" alt="{{$evento->titulo}}" class="" />
                <div class="card-body">
                <p class="card-date">Data/Hora: {{$evento->data_evento}} - {{$evento->hora_evento}}</p>
                        <h6 class="card-title">{{$evento->titulo}}</h6>
                        <p class="card-descriocao"> {{$evento->descripcao}} </p>
                        <p class="endereco-evento">Endere&ccedil;o: <a href="#" title="{{$evento->endereco}}">{{$evento->id_endereco}}</a> </p>
                        <p class="publico">P&uacute;blico: {{$evento->publico}}</p>
                        <p class="publico">Ingressos disponiveis: {{$evento->ingresso - $evento->vendido}}</p>
                        <p class="publico">Status: {{$evento->status}}</p>
                        <p class="custo">Pre&ccedil;o: R$. {{$evento->preco_ingresso}}</p>
                        <a href="/eventos/{{ $evento->id }}" class="btn btn-primary"><ion-icon name="list-outline"></ion-icon> Detalhes </a>
                </div>
            </div>
        @endforeach
        @if(count($eventos) == 0 && $search)
            <p><ion-icon name="information-circle-outline"></ion-icon> N&atilde;o encontramos nenhum evento com o {{$search}} </p>
        @elseif(count($eventos) == 0 )
            <p><ion-icon name="information-circle-outline"></ion-icon> N&atilde;o tem evento dispon&iacute;vel!</p>
        @endif
    </div>
</div>
@endsection
