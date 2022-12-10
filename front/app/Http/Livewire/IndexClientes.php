<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class IndexClientes extends Component
{
    public $idCliente;
    public function render()
    {
         $response = Http::get('http://127.0.0.1:8000/api/clientes');
         $clientes = $response-> json ();
        return view('livewire.index-clientes', compact('clientes'));
    }

    public function eliminar($id){
        $this->idCliente = $id;

        Http::delete('http://127.0.0.1:8000/api/clientes/' .$this->idCliente);


    }
}
