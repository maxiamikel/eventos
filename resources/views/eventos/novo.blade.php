@extends('layouts.main')
@section('title', 'SGE, Criar novo evento')
@section('content')

<div class="container col-md-4 offest-md-3" id="form-container">
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
            <input type="hidden" name="status"  id="titulo" value="Fechado" >
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
            <select name="endereco_id" id="endereco" class="form-control">
                <option value="0" >Selecionae uma opção</option>
                <option value="1">Endereco 1</option>
                <option value="2">Endereco 2</option>
                <option value="3">Endereco 3</option>
            </select>
            
        </div><a href="/enderecos/novo">Adicione</a>
        <div class="form-group">
            <label for="custo">Pre&ccedil;o do evento: </label>
            <input type="number" name="preco_ingresso" class="form-control" id="titulo" placeholder="0.00" >
        </div>
        <div class="form-group">
            <label for="adicione-itens">Incluir os itens adicionais do evendos</label>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Cerveja gratis"> Cerveja gr&aacute;tis
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Brindes"> Brindes
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Artista ao vivo"> Artista ao vivo
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Churrasco gratis"> Churrasco gr&aacute;tis
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Pasteis"> Pasteis
            </div>

        </div>
        <div class="form-group-control">
        <input type="submit" name="custo" class="btn btn-primary" id="btn" value='Salvar no banco' > 
        </div>
    </form>
</div>

@endsection