<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class IndexFacturas extends Component
{
    public $idFactura;
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/facturas');
        $facturas = $response-> json ();


        return view('livewire.index-facturas', compact('facturas'));
    }

    public function eliminar($id){
        $this->idFactura = $id;

        Http::delete('http://127.0.0.1:8000/api/facturas/' .$this->idFactura);


    }
}
