<?php

namespace App\Http\Livewire;

use App\Models\Comision;
use Livewire\Component;

class SHOWComisiones extends Component
{
    public $comisiones, $titulo, $descripcion, $url_local, $comision_id, $comision;

    public function mount($id)
    {
        $this->comision = Comision::findOrFail($id);
        $this->titulo = $this->comision->titulo;
    }

    public function render()
    {
        return view('livewire.s-h-o-w-comisiones');
    }
}
