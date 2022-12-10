<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class DetallesEdit extends Component
{

    public $datos = [];
    public $idDetalle;


    public function mount($id){
      $this-> idDetalle = $id;
      $this -> datos =  Http::get('http://127.0.0.1:8000/api/detalles/' . $id) ->json();
    }


    public function render()
    {
        return view('livewire.detalles-edit');
    }

    public function modificar()
    {
        $response = Http::withHeaders(['Accept' => 'Application/json'])
        ->put('http://127.0.0.1:8000/api/detalles/' .$this->idDetalle,$this->datos );
        if($response->successful()){
            $this->emit('success', 'Se modifico con exito el cliente');
            return redirect('/detalles');
        }
    }
}
