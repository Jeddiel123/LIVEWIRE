<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Edificio;
use App\Models\Departamento;

class Edificios extends Component
{

    public $nombreEdificio;
    public function mostrarEdificio($id)
{
    $edificio = Edificio::find($id);
    $this->nombreEdificio = $edificio;
}

    public function render()
    {
        
        return view('livewire.edificios');
    }   
}
