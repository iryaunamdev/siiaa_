<?php

namespace App\Http\Livewire\Comisiones;

use Livewire\Component;

class Wrapper extends Component
{
    public $step = 1;


    public function render()
    {
        return view('livewire.comisiones.wrapper');
    }


}
