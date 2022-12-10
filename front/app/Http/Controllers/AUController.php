<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AUController extends Controller
{
    public function obtenerU(){
        //agregar api
        $response = Http::get("http://127.0.0.1:8000/api/usuarios");
        $usuarios = $response -> json(); //solo esta clave de api 
       // dd($amiibos);
        return view('usuario', compact('usuarios'));
    }
}
