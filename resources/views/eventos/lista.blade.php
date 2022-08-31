@extends('layouts.main')
@section('title', 'SGE, Criar novo evento')
@section('content')
<div id="search-container" class="col-md-12">
    <h1>Encontrar um evento</h1>
    <form action="" name="fsearch" method="GET">
        <input type="text" class="form-control" name="search" placeholder="Buscar...">
    </form>
</div>
<div id="events-container" class="vol-md-12">
    <h2>Proximos eventos</h2>
    <p class="title-2">Veja os eventos </p>
    <vid id="cards-container" class="row">
        @for($i = 0; $i < 9; $i++)
            <div class="card col-md-3">
                <img src="/images/im1.png ">
                <div class="card-body">
                    <p class="card-date">22/02/2022</p>
                    <h5 class="card-title">Titulo do card</h5>
                    <p class="card-content">Conteudo do card</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        @endfor
    </vid>
</div>
@endsection
