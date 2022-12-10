<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FacturasCreated extends Component
{ 
    
    public $datos = [
        
    ];
    public function render()
    {
        return view('livewire.facturas-created');
    }

   

   
    public function guardar(){
       $response = Http::withHeaders([
        'Accept'=> 'Application/json'
       ])->post('http://127.0.0.1:8000/api/facturas', $this->datos);
        if ($response -> successful()){
            return redirect('/facturas');
        }
        else{
            dd('Error');
        }
   
    }
}
