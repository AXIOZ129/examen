<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class IndexDetalles extends Component
{
    public $idDetalle;
   public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/detalles');
         $detalles = $response-> json ();

        return view('livewire.index-detalles', compact('detalles'));
    }
    public function eliminar($id){
        $this->idDetalle = $id;

        Http::delete('http://127.0.0.1:8000/api/detalles/' .$this->idDetalle);


    }

}
