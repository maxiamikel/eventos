
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" name="fsearch" method="GET">
        <input type="text" placeholder="Buscar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Eventos</h2>
    <p>Proximos evendos</p>
    <div id="card-container" class="row">
        @foreach($eventos as $evento)
            <div class="card col-md-3">
                <img src="/images/eventos/{{$evento->foto}} " alt="{{$evento->titulo}}" />
                <div class="card-body">
                    <div class="card-date">29/12/2022</div>
                    <div class="card-title"><h5>{{$evento->titulo}}</h5></div>
                    <p class="card-details">Detalhes</p>
                    <a href="#" class="btn btn-primary"> Ver mais</a>
                </div>
            </div>

        @endforeach
    </div>
</div>



========================

#events-container {
    padding: 50px;
}

#events-container h2 {
    margin-bottom: 10px;
}

#card-container {
    display: flex;
}

#card-container card {
    flex: 1 1 0;
    max-width: 25%;
    border-radius: 10px;
    padding: 0;
    margin: 5px;
}
==========================

