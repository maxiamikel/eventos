@extends('layouts.main')
@section('title', 'SGE, Criar novo evento')
@section('content')

<div class="col-md-6 offest-md-3" id="novo-container">
<h2>Criar novo evento</h2>

    <form action="/eventos" method="GET">
        @csrf
        <div class="form-group">
            <label for="titulo">Totulo: </label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo do evento" >
        </div>
        <div class="form-group">
            <label for="desctipcao">Desctip&ccedil;&atilde;o</label>
            <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Breve descrip&ccedil;&atilde;o do evento" >
        </div>
        <div class="form-group">
            <label for="data">Data do evento</label>
            <input type="date" name="data" class="form-control" id="data"  > 
            <label for="hora">Hora</label>
            <input type="time" name="hora" id="hora" class="form-control" >
        </div>
        <div class="form-group">
            <label for="">Tipo do evento</label>
            <select name="privado" id="tipo" class="form-control">
                <option value="9">Selecione o tipo de evento</option>
                <option value=0>P&uacute;blico</option>
                <option value=1>Privado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Endere&ccedil;o do evento</label>
            <select name="endereco" id="endereco" class="form-control">
                <option value="">Selecione o endere&ccedil;o</option>
                <option value="0">Endereco 1</option>
                <option value="1">Endereco 2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="data">Custo do evento</label>
            <input type="numeric" name="custo" class="form-control" id="custo"  > 
        </div>
        <div class="form-group">
        <input type="submit" name="custo" class="btn btn-primary" id="custo" value='Salvar no banco' > 
        </div>
    </form>
</div>

@endsection