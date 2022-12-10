<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ClientesCreate extends Component
{
    public $datos = [
        
    ];

    public function render()
    {
        return view('livewire.clientes-create');
    }


    public function guardar(){
       $response = Http::withHeaders([
        'Accept'=> 'Application/json'
       ])->post('http://127.0.0.1:8000/api/clientes', $this->datos);
        if ($response -> successful()){
            return redirect('/clientes');
        }
        else{
            dd('Error');
        }
   
    }
}
