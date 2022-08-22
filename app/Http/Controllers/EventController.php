<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;
use App\Models\Endereco;

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
        $evento->descripcao = $request->descripcao;
        $evento->id_endereco = $request->id_endereco;
        $evento->ingresso = $request->ingresso;
        $evento->vendido = $request->vendido;
        $evento->status = $request->status;
        $evento->data_evento = $request->data_evento;
        $evento->hora_evento = $request->hora_evento;
        //$evento->data_publicacao = $request->data_publicacao;
        $evento->preco_ingresso = $request->preco_ingresso;

        if($request->hasFile('foto') && $request->file('foto')->isvalid()){

            $requestImage = $request->foto;

            $extensionImage = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now"). "." . $extensionImage);

            $request->foto->move(public_path('images/eventos'), $imageName);
            $evento->foto = $imageName;
        }

        $evento->save();

        return redirect('/')->with('msg','Evento foi adicionado com sucesso no banco de dados');
    }

    public function show($id)
    {
        //$endereco = Endereco::findOrFail($id);
        $eventos = Eventos::findOrFail($id);
        return view('eventos.show', ['evento' =>$eventos]);
    }
}

