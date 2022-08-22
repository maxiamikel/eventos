@extends('layouts.main')
@section('title', 'Home')
@section('content')

   <div id="search-container" class="com-md-12">
        <h2>Encontrar um evento</h2>
        <form action="" name="fsearch">
            <input type="text" name="search" class="form-control" placeholder="Digite a palavra a buscar">
        </form>
   </div>
   <div class="com-md-12" id="event-container">
    <h2>Eventos </h2>
        <div class="" id="card-container">
            @foreach($eventos as $evento)
                <div class="card col-md-3" id="card">
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
        </div>
   </div>

@endsection
 
    