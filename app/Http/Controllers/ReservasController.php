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
        
        return view('eventos.reservar',['evento'=> $evento]);
    }
}
