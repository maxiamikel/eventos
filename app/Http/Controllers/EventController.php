<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;

class EventController extends Controller
{
    public function index()
    {
        return view('eventos.novo');
    }

    public function listar()
    {
        return view('eventos.lista');
    }

    public function store(Request $request)
    {
        $evento = new Eventos();

        $evento->titulo = $request->titulo;
        $evento->descricao = $request->descricao;
        $evento->data = $request->data;
        $evento->hora = $request->hora;
        $evento->privado = $request->privado;
        $evento->publico = $request->publico;
        $evento->endereco = $request->endereco;
        $evento->custo = $request->custo;

        $evento->save();

        return redirect('/');
    }
}

