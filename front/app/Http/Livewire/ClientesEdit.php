<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ClientesEdit extends Component
{

    public $datos = [];
    public $idCliente;
    

    public function mount($id){
      $this-> idCliente = $id;
      $this -> datos =  Http::get('http://127.0.0.1:8000/api/clientes/' . $id) ->json();
    }



    public function render()
    {
        return view('livewire.clientes-edit');
    }

    public function modificar()
    {
        $response = Http::withHeaders(['Accept' => 'Application/json'])
        ->put('http://127.0.0.1:8000/api/clientes/' .$this->idCliente,$this->datos );
        if($response->successful()){
            $this->emit('success', 'Se modifico con exito el cliente');
            return redirect('/clientes');
        }
    }

}
