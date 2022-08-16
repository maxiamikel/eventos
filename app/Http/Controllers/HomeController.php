<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;

class HomeController extends Controller
{
    public function index()
    {
        $eventos = Eventos::all();

        return view('home',['eventos'=>$eventos]);
    }
}
