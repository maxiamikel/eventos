<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;

class HomeController extends Controller
{
    public function index()
    {
        $search = request('search');
        if($search){
            $eventos = Eventos::where([
                ['titulo','like', '%'.$search.'%']
            ])->get();
        }else{
            $eventos = Eventos::all();
        }
        

        return view('home',['eventos'=>$eventos], ['search' =>$search]);
    }
}
