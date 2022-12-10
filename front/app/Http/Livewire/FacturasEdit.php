<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FacturasEdit extends Component
{

    public $datos = [];
    public $idFactura;


    public function mount($id)
    {
        $this->idFactura = $id;
        $this->datos =  Http::get('http://127.0.0.1:8000/api/facturas/' . $id)->json();
    }

    public function render()
        {
            return view('livewire.facturas-edit');
        }
    public function modificar()
    {
        $response = Http::withHeaders(['Accept' => 'Application/json'])
            ->put('http://127.0.0.1:8000/api/facturas/' . $this->idFactura, $this->datos);
        if ($response->successful()) {
            return redirect('/facturas');
        }
    }




    
}
