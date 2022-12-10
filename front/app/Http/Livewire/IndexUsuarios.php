<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class IndexUsuarios extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/usuarios');
        $usuarios = $response-> json ();
        
        return view('livewire.index-usuarios', compact('usuarios'));
    }

    

    
}
