<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
