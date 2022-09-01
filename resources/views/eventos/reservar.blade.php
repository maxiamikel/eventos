@extends('layouts.main')
@section('title', 'SGE, Reservar')
@section('content')



<div class="container col-md-4 offest-md-3" id="form-container">
   <div class="info-reserva">
      <div class="info">
         <h3>{{$evento->titulo}}</h3>
         <h5>({{$evento->data_evento}}: {{$evento->hora_evento}} )</h5>
      </div>
      <div class="valor">
         <h2>R$- {{$evento->preco_ingresso}}.00</h2>
         @if($evento->status == 'Aberto')
         <span class="aberto">{{$evento->status}}</span>
         @else
         <span class="fechado">{{$evento->status}}</span>
         @endif
      </div>

   </div>

<form action="/eventos" method="POST">
@csrf
    <div class="form-group">
      
        <label for="nome">Informe seu nome </label>
        <input type="text" name="txtNome" class="form-control" id="titulo" placeholder="Nome" >
        <input type="hidden" name="txtId" value="{{$evento->id}}" >
     </div>
     <div class="form-group">
        <label for="nome">Informe seu CPF </label>
        <input type="text" name="txtCpf" class="form-control" id="titulo" placeholder="CPF" >
     </div>
     <div class="form-group">
        <label for="email">Informe seu e-mail </label>
        <input type="email" name="txtEmail" class="form-control" id="titulo" placeholder="e-mail" >
     </div>
     <div class="form-group">
        <label for="telefone">Informe seu Telefone </label>
        <input type="text" name="txtTelefone" class="form-control" id="titulo" placeholder="Telefone" >
     </div>
     <div class="form-group-control">
     @if($evento->status == 'Aberto')
        <input type="submit" name="btnSubmit" class="btn btn-primary" id="btn" value='Reservar' > 
        <input type="button" name="btnCancel" class="btn btn-danger" id="btn" value='Cancelar' > 
      @else
      <input type="button" name="btnCancel" class="btn btn-danger" id="btn" value='Cancelar' > 
      @endif
     </div>

</form>
    
</div>

@endsection
