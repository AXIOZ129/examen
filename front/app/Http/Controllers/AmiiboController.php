<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AmiiboController extends Controller
{
    public function obtener(){
        //agregar api
        $response = Http::get("https://amiiboapi.com/api/amiibo/");
        $amiibos = $response -> json()['amiibo']; //solo esta clave de api 
       // dd($amiibos);
        return view('amiibo', compact('amiibos'));
    }
}
