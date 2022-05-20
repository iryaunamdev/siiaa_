<?php

namespace App\Http\Livewire\Comisiones;

use Livewire\Component;

class Documentos extends Component
{
    public function render()
    {
        return view('livewire.comisiones.documentos');
    }

    public submit()
    {
        $this->emmit('stepEvent', 3);
    }
}
