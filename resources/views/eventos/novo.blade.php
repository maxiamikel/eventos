@extends('layouts.main')
@section('title', 'SGE, Criar novo evento')
@section('content')

<div class="container col-md-6 offest-md-3">
<h2>Criar novo evento</h2>

    <form action="/eventos" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo do evento" >
        </div>
        <div class="form-group">
            <label for="desctipcao">Desctip&ccedil;&atilde;o</label>
            <input type="text" name="descripcao" class="form-control" id="descricao" placeholder="Breve descrip&ccedil;&atilde;o do evento" >
        </div>
        <div class="form-group">
            <label for="image">Foto do evento: </label>
            <input type="file" name="foto" class="form-control-file" id="titulo" >
        </div>
        <div class="form-group">
            <label for="publico">N&uacute;mero de participantes: </label>
            <input type="number" name="ingresso" class="form-control" id="titulo" placeholder="120 pessoas" >
            <input type="hidden" name="status"  id="titulo" value="Aberto" >
            <input type="hidden" name="vendido"  id="titulo" value="0" >
        </div>
        <!-- <div class="form-group">
            <label for="data">Data e hora do evento: </label>
            <input type="date" name="data" class="form-controll" id="titulo" >
            <input type="time" name="hora" class="form-controll" id="titulo" >
        </div> -->
        <div class="form-group">
            <label for="data">Data do evento</label>
            <input type="date" name="data_evento" class="form-controlc" id="titulo"  >
            <input type="time" name="hora_evento" class="form-controlc" id="titulo"  >
            <!-- <input type="hidden" name="data_publicacao" value="{{now()}}"  > -->
        </div>
        <div class="form-group">
            <label for="">Endere&ccedil;o do evento</label>
            <select name="id_endereco" id="endereco" class="form-control">
                <option value="0" >Selecionae uma opção</option>
                <option value="1">Endereco 1</option>
                <option value="2">Endereco 2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="custo">Pre&ccedil;o do evento: </label>
            <input type="number" name="preco_ingresso" class="form-control" id="titulo" placeholder="0.00" >
        </div>
        <div class="form-group">
        <input type="submit" name="custo" class="btn btn-primary" id="btn" value='Salvar no banco' > 
        </div>
    </form>
</div>

@endsection