<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;
use App\Models\Reservas;

class ReservasController extends Controller
{
    public function reservar($id)
    {
        $evento = Eventos::findOrFail($id); 
        
        return view('eventos.reservar',['evento'=> $eve

    public function store(Request $request)
    {
        $reserva = new Reservas();
        $reserva->nome = $request->txtNome;
        $reserva->cpf = $request->txtCpf;
        $reserva->email = $request->txtEmail;
        $reserva->telefone = $request->txtTelefone;
        $reserva->id_reserva = $request->txtId;

        $reserva->save();

        return redirect('/')->with('msg','Sucesso, sua reserva foi processada e reservada. Te esperamos!');

    }
}
