@extends('layouts.main')
@section('title', 'SGE, {{$evento->titulo}}')
@section('content')

<div class="col-md-10 offest-md-1" id="show-container">
    <div class="row">
        <div class="col-md-6" id="image-container">
            <img src="/images/eventos/{{$evento->foto}}" class="img-fluid" alt="{{$evento->titulo}}" />
        </div>
        <div class="col-md-6" id="show-info">
            <h1>{{$evento->titulo}}</h1> <span>Publicado em :{{  now() }}</span>
            <p class="card-date">Data e hora do evento: {{date('d/m/Y',strtotime($evento->data_evento))}} - {{$evento->hora_evento}}</p>
            <p class="endereco-evento">Local:   <ion-icon name="location-outline"></ion-icon>{{$endereco['logaduro']}}, {{$endereco['numero']}}, {{$endereco['cidade']}} - {{$endereco['estado']}}</p>
            <p class="publico"><ion-icon name="people-outline"></ion-icon> {{$evento->vendido}}</p>
            <p class="publico">Ingressos disponiveis: {{$evento->ingresso - $evento->vendido}}</p>
            <p class="publico">Status: {{$evento->status}}</p>
            <p class="custo">Pre&ccedil;o: R$. {{$evento->preco_ingresso}}</p>
                    @if($evento->itens > 0)
                        <h3>Itens adicionais</h3>
                        <ul id="itens-list">
                            @foreach($evento->itens as $item)
                                <li><ion-icon name="chevron-forward-outline"></ion-icon> {{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
            <div class="col-md-6" id="col-md-6">
                <a href="/eventos/reservar/{{$evento->id}}" class="btn btn-primary">Reservar</a>
            </div>

         </div>
    
    </div>
    <div class="col-md-12" id="container-details">
        <h3>Sobre o evento</h3>
        <p class="card-descriocao"> {{$evento->descripcao}} </p>
    </div>
</div>


@endsection