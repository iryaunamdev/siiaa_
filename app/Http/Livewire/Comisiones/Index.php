<?php

namespace App\Http\Livewire\Comisiones;

use App\Models\Comision;
use Livewire\Component;

class Index extends Component
{
    public $comisiones;


    public function render()
    {
        $this->comisiones = Comision::all();
        return view('livewire.comisiones.index');
    }
}
