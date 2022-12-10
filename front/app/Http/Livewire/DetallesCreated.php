<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class DetallesCreated extends Component
{

    public $datos = [

    ];

    public function render()
    {
        return view('livewire.detalles-created');
    }

    public function guardar(){
        $response = Http::withHeaders([
         'Accept'=> 'Application/json'
        ])->post('http://127.0.0.1:8000/api/detalles', $this->datos);
         if ($response -> successful()){
             return redirect('/detalles');
         }
         else{
             dd('Error');
         }

     }
}
